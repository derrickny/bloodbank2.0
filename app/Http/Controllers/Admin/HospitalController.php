<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hospital;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
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
                $btn='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'"  data-original-title="Edit Category" class="edit_category btn btn-primary btn-sm">Edit</a>';
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
                $details='Email : ' . $row2->email  . " <br> Phone : " . $row2->phone_no . "<br> Location : " . $row2->location . "<br> County : " . $row2->county ;
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
      
        Hospital::create([
            'hospital_name' => $request->hospital_name,
            'hospital_phone' => $request->hospital_phone,
            'hospital_email' => $request->hospital_email,
            'hospital_location' =>$request->hospital_location,
            'hospital_doc'=> $profileDoc,
            'hospital_status' => "verified",
            'added_by' => $user->id,
        ]);
    
        return response()->json(['success'=>'New Hospital Successfully Added']);
    }
        //

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
