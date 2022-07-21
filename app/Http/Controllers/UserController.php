<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Validator;
use App\Models\User;
use DataTables;
use App\Models\Hospital;

class UserController extends Controller
{
    //

     /**
     * Display a list of all users
     */

    public function index(Request $request)
    {
     $users = User::orderBy('id','DESC')->get();
     return response()->json($users);
    }

    /**
     * Display Hospital listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hospitalList(Request $request)
    {
        //
        if($request->ajax())
        {
            $user = Auth::guard('user')->user();
            $data=$user->role==3 ? Hospital::where('hospital_email',$user->email)->latest()->get()
            : Hospital::latest()->get();
            
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action',function($row){
                $user = Auth::guard('user')->user();
                $btn='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'"  data-original-title="Donate" class="donate btn btn-primary btn-sm">Donate</a>';
                $edit='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'"  data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';
                return $user->role==2 ? $btn : $edit;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

      
    }

    /**
     * Hospital Details
     */

     public function editProfile(Request $request)
     {
         $hospital = Hospital::where('id','=',$request->id)->first();
         return $hospital;
     }
    

       /**
      * Store Users Data
      *
      */

      public function store(Request $request)
      {
          //
          $validator = Validator::make($request->all(),[
              'fullname' => 'required|max:255',
              'email' => 'required|unique:users',
              'phone_no' => 'required|max:255',
              'county' => 'required|max:255',
              'location' => 'required|max:255',
              'date_of_birth' => 'required|max:255',
              'bld_grp' => 'required|max:255',
              'password' => 'required|min:7',
          ]);
          if($validator->passes())
          {
           $user =  User::create([
              'full_name' => $request->fullname,
              'email' => $request->email,
              'phone_no' => $request->phone_no,
              'id_no'  => $request->id_no,
              'county' => $request->county,
              'location' => $request->location,
              'date_of_birth' => $request->date_of_birth,
              'blood_group' => $request->bld_grp,
              'gender' => $request->gender,
              'password' => bcrypt($request->password),
              'role' => '2'
            ]);

            // $accessToken = $user->createToken('authToken')->accessToken;
            
            return response()->json(['user'=>$user,'success'=>'Account Successffully Created']);
          }
          else {
              return response()->json(['user_errors' => $validator->errors()->all()]);
          }

      }

      /**
       * Edit User
       */

       public function editUser()
       {
        $user = Auth::guard('user')->user();
        return view('donor.dashboard.edit_profile',compact("user"));
       }


              /**
      * Store Users Data
      *
      */

      public function updateUser(Request $request)
      {
          //
          $validator = Validator::make($request->all(),[
              'fullname' => 'required|max:255',
              'email' => 'required',
              'phone_no' => 'required|max:255',
              'county' => 'required|max:255',
              'location' => 'required|max:255',
              'date_of_birth' => 'required|max:255',
              'bld_grp' => 'required|max:255',
              'password' => 'required|min:7',
          ]);
          if($validator->passes())
          {
           $user =  User::where('id','=',$request->hidden_user_id)->update([
              'full_name' => $request->fullname,
              'email' => $request->email,
              'phone_no' => $request->phone_no,
              'id_no'  => $request->id_no,
              'county' => $request->county,
              'location' => $request->location,
              'date_of_birth' => $request->date_of_birth,
              'blood_group' => $request->bld_grp,
              'gender' => $request->gender,
              'password' => bcrypt($request->password),
              'role' => '2'
            ]);

            // $accessToken = $user->createToken('authToken')->accessToken;
            
            return response()->json(['user'=>$user,'success'=>'Account Successffully Created']);
          }
          else {
              return response()->json(['user_errors' => $validator->errors()->all()]);
          }

      }


         /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateHospital(Request $request)
    {
        //
        //$request->validate();
        $validator = Validator::make($request->all(),[
            'hospital_name' => 'required|max:255',
            'hospital_location' => 'required',
            'hospital_phone' => 'required',
            'hospital_email' => 'required', 
            'password' => 'required|string|min:6',
            'confirm_password' => 'required_with:new_password|same:password|string|min:6',
        ]);

        if($validator->passes())
        {

            $user = Auth::guard('admin')->user();
           $id = $request->hidden_profile_id;
            $update_data = array(
                    'hospital_name' => $request->hospital_name,
                    'hospital_phone' => $request->hospital_phone,
                    'hospital_email' => $request->hospital_email,
                    'hospital_location' => $request->hospital_location
                    
            );
            Hospital::whereId($id)->update($update_data);
            User::where('email','=',$request->hospital_email)->update(['password'=>bcrypt($request->password)]);
            return response()->json(['success'=>'Hospital Details Successfully Updated']);

        }
        else
        {
            return response()->json(['hospital_errors' => $validator->errors()->all()]);

 
        }

    }
}

