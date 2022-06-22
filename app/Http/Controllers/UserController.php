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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hospitalList(Request $request)
    {
        //
        if($request->ajax())
        {
            $data = Hospital::latest()->get();
            return Datatables::of($data)->addIndexColumn()
            ->addColumn('action',function($row){
                $btn='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'"  data-original-title="Donate" class="donate btn btn-primary btn-sm">Donate</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

      
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
}
