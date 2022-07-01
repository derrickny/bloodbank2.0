<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDonations;
use App\Models\User;
use App\Models\Hospital;
use App\Models\PointsConverted;
use Validator;
use DataTables;
use Auth;
use DB;
use Carbon;
use App\Mail\BloodGroupConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Mail\PointsConvertion;

class UserDonationController extends Controller
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
            $user = Auth::guard('user')->user();
            $column_where = $user->role==3 ? 'hospitals.hospital_email' : 'users.email';
             $data = DB::table('user_donations')->join('users','users.id','=','user_donations.donation_user_id')
             ->join('hospitals','hospitals.id','=','user_donations.hospital_id')
             ->where($column_where,'=',$user->email)
             ->orderBy('user_donations.id','DESC')->get();
             return Datatables::of($data)->addIndexColumn()
             ->addColumn('user_details',function($row2){
                 $date_birth = date_create($row2->date_of_birth);
                 $current_date = date_create(date('Y-m-d'));
                 $diff = date_diff($date_birth,$current_date);
                  
                 $details='<span>Name :  '. $row2->full_name . '<br> Email : ' . $row2->email . 
                 '<br> Phone  : '  . $row2->phone_no . ' <br> ID No :' . $row2->id_no .
                  '<br> D.O.B : ' . $row2->date_of_birth . '<br> Age : '. $diff->y  . '  years' .' </span>';
                 return $details;
 
             })
              
             ->addColumn('points_rewarded',function($row4){
                return $row4->reward . " Points";
             })
            
             ->addColumn('action',function($row){
                 $btn='<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->id.'"  data-original-title="Add Donation" class="add_donation btn btn-primary btn-sm">Add Donation</a>';
                 return $btn;
 
             })
             ->rawColumns(['user_details','points_rewarded','action'])
             ->make(true);
         }
 
         return view('donor.dashboard.user_donations');
    }

     /**
     * User Total Rewards
     */

    public function sumRewards()
    {
       $user = Auth::guard('user')->user();
       
       $sum = DB::table('user_donations')->where('donation_user_id',$user->id)->sum('reward');
       
       return view('donor.dashboard.convert_rewards',compact('sum'));
     
    }

    /**
     * Show Other Hospital Stock Group By Blood Group
     */

     public function ourStock()
     {
        $user = Auth::guard('user')->user();
        $hospital = Hospital::where('hospital_email','=',$user->email)->first();
        $data = DB::table('user_donations')->select('blood_group', DB::raw('sum(pints_donated) as total_pints'))
        ->where('hospital_id','=',$hospital->id)->groupBy('blood_group')->orderBy('total_pints')->get();
        return Datatables::of($data)->make(true);
     }

      /**
     * Show Hospital Stock Group By Blood Group
     */

    public function othersStock()
    {
       $user = Auth::guard('user')->user();
       $hospital = Hospital::where('hospital_email','=',$user->email)->first();
       $data = DB::table('user_donations')->select('user_donations.blood_group','hospitals.hospital_name', DB::raw('sum(pints_donated) as total_pints'))
       ->join('hospitals','hospitals.id','=','user_donations.hospital_id')
       ->where('hospital_id','!=',$hospital->id)
      ->groupBy('user_donations.blood_group','user_donations.hospital_id')->orderBy('total_pints')->get();
      return Datatables::of($data)->make(true);
    }


    /**
     * Convert Points
     */

     public function convertPoints(Request $request)
     {
        $validator = Validator::make($request->all(),[
            'points_to_convert' => 'required|max:255',
            'available_points' => 'required|max:255',
            'hospital_name' => 'required|max:255'
        ]);
        if($validator->passes())
        {
        
        $user = Auth::guard('user')->user();
        $available_points = $request->available_points;
        $points_converted = $request->points_to_convert;
        $rem_points =  $available_points - $points_converted;

        PointsConverted::create([
            'hospital_id' => $request->hospital_name,
            'user_id' =>$user->id,
            'points_converted' => $points_converted,
            'rem_points' => $rem_points,
            'status' => 'approved'
        ]);

        $hospital = Hospital::where('id','=',$request->hospital_name)->first();
        $hospital_email = $hospital->hospital_email;
        $hospital_name= $hospital->hospital_name;

        $donor =User::where('id','=',$user->id)->first();
        $donor_email = $donor->email;
        $donor_name= $donor->full_name;

        
        Mail::to($hospital_email)->send(new PointsConvertion($hospital_name,$donor_name,$donor_email,$points_converted));
        
        return response()->json(['success'=>'Points Has Successfully Been Converted,Wait For The Hospital COnfirmation']);
        }
        else {
            return response()->json(['errors' => $validator->errors()->all()]);
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
        return view('donor.dashboard.user_donations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'blood_group' => 'required|max:255',
            'pints_donated' => 'required|max:255',
            'date_donated' => 'required|max:255',
            'hidden_user_id' => 'required|max:255'
        ]);
        if($validator->passes())
        {
        
        $user = Auth::guard('user')->user();
        $hospital = Hospital::where('hospital_email','=',$user->email)->first();
         $user_donations =  UserDonations::create([
            'hospital_id' => $hospital->id,
            'date_donated' => $request->date_donated,
            'donation_user_id' => $request->hidden_user_id,
            'pints_donated'  => $request->pints_donated,
            'reward' => 250,
            'blood_group' => $request->blood_group,
            'status' => 'verified'  
          ]);

          $blood_group = $request->blood_group;
          $user_id = $request->hidden_user_id;
          $user_donate = User::where('id','=',$user_id)->first();
          $email = $user_donate->email;
          $name= $user_donate->full_name;
          
          Mail::to($email)->send(new BloodGroupConfirmation($name,$email,$blood_group));

          return response()->json(['success'=>'Donation Details Successfully Placed,Will Get Back To You Shortly']);
          
        }
        else {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
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
