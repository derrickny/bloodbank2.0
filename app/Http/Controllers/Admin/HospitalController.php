<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hospital;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use DataTables;
use Image;
use Auth;
use DB;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax())
        {
            $data = Hospital::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('document', function ($row2) { 
                $url= asset('storage/docs/'.$row2->hospital_doc);
                return '<a href="'.$url.'" download rel="noopener noreferrer" target="_blank">
                View Doc
             </a>';
            })
            ->addColumn('action',function($row){
                $btn="<a href='". route('hospital.edit',$row->id)."'  data-original-title='Edit Hospital' class='btn btn-primary btn-sm'>Edit</a>";
                return $btn;

            })
            ->rawColumns(['document','action'])
            ->make(true);
        }

        return view('admin.dashboard.hospital.index');
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donors(Request $request)
    {
        //
        if($request->ajax())
        {
            $data = User::where('role',2)->latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('contact_details',function($row2){
                $date_birth = date_create($row2->date_of_birth);
                $current_date = date_create(date('Y-m-d'));
                $diff = date_diff($date_birth,$current_date);
                $details='Email : ' . $row2->email  . " <br> Phone : " . $row2->phone_no . "<br> Location : " . $row2->location . 
                "<br> D.O.B : " . $row2->date_of_birth .
                "<br> Age : " . $diff->y  . '  years' .
                "<br> County : " . $row2->county ;
                return $details;
            })
            
            ->addColumn('action',function($row){
                $btn='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'"  data-original-title="Edit Category" class="edit_category btn btn-primary btn-sm">Edit</a>';
                return $btn;

            })
            ->rawColumns(['contact_details','action'])
            ->make(true);
        }

        
    }

    /**
     * Return All Hospitals Object
     */
    public function Hospitals()
    {
        $hospitals = Hospital::orderBy('id','DESC')->get();
        return response()->json($hospitals);
    }   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.dashboard.hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //$request->validate();
        $validator = Validator::make($request->all(),[
            'hospital_name' => 'required|max:255|unique:hospitals',
            'hospital_location' => 'required',
            'hospital_phone' => 'required',
            'hospital_email' => 'required',  
        ],[
            'hospital_name.unique' => 'Hospital Name Already Exists'
        ]);
            $input = $request->all();
            if($doc= $request->file('hospital_doc'))
            {

                // $new_name = rand() . '.' . $doc->getClientOriginalExtension();
            
                // $destinationPath = public_path('pichas');
                $doc = $request->file('hospital_doc');
                $input['imagename'] = time().'.'.$doc->extension();
                $filePath = public_path('storage/docs/');
                $profileDoc = $input['imagename'];
                //$doc->move($destinationPath,$profileDoc);
                Storage::disk('public')->putFileAs('docs', $request->file('hospital_doc'), $profileDoc);
                $input['hospital_doc'] = "$profileDoc";


            }
            if($validator->fails())
            {
                return response()->json(['hospital_errors' => $validator->errors()->all()]);
            }
            else
            {
            $user = Auth::guard('admin')->user();
            $name  = $request->hospital_name;
            $email = $request->hospital_email;
            $phone_no = $request->hospital_phone;
            //generate random string password
            $random_password = $this->generate_string();

                Hospital::create([
                    'hospital_name' => $name,
                    'hospital_phone' => $phone_no,
                    'hospital_email' => $email,
                    'hospital_location' =>$request->hospital_location,
                    'hospital_doc'=> $profileDoc,
                    'hospital_status' => "verified",
                    'added_by' => $user->id,
                ]);
                
                
                $hospital_user = User::create([
                    'full_name' => $name,
                    'email' => $email,
                    'password' => bcrypt($random_password),
                    'phone_no' => $phone_no,
                    'role' => 3
                ]);
            
                Mail::to($email)->send(new WelcomeMail($name,$email,$random_password));
                return response()->json(['success'=>'New Hospital Successfully Added']);
            }
                //

    }

    /**
     * Generate string password
     * Return string
     */

    public function generate_string() {
        $strength = 16;
        $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
     
        return $random_string;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hospital = Hospital::findOrFail($id);
        return view('admin.dashboard.hospital.edit',compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //$request->validate();
        $validator = Validator::make($request->all(),[
            'hospital_name' => 'required|max:255',
            'hospital_location' => 'required',
            'hospital_phone' => 'required',
            'hospital_email' => 'required',  
        ]);

        if($validator->passes())
        {

            $user = Auth::guard('admin')->user();
           $id = $request->hospital_id;
            $update_data = array(
                    'hospital_name' => $request->hospital_name,
                    'hospital_phone' => $request->hospital_phone,
                    'hospital_email' => $request->hospital_email,
                    'hospital_location' =>$request->hospital_location,
                    'hospital_doc'=> $request->hospital_doc,
                    'hospital_status' => "verified",
                    'added_by' => $user->id,
            );
            Hospital::whereId($id)->update($update_data);
            return response()->json(['success'=>'Hospital Details Successfully Updated']);

        }
        else
        {
            return response()->json(['hospital_errors' => $validator->errors()->all()]);

 
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
