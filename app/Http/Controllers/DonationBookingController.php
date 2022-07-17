<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationBooking;
use App\Models\User;
use Validator;
use DataTables;
use Auth;
use DB;
use Carbon;
use AfricasTalking\SDK\AfricasTalking;

class DonationBookingController extends Controller
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
            $data = DB::table('donation_bookings')
            ->join('users','users.id','=','donation_bookings.booked_by')
            ->join('hospitals','hospitals.id','=','donation_bookings.hospital_id')
            ->where($column_where,'=',$user->email)
            ->orderBy('donation_bookings.id','DESC')->get();
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
            ->addColumn('action',function($row){
                $user = Auth::guard('user')->user();

                $btn= $user->role== 2 ? ' ' :  '<a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->booked_by.'"  data-original-title="Add Donation" class="add_donation btn btn-primary btn-sm">Add Donation</a>
                &nbsp <a href="javascript:void(0)" data-toggle="tooltip"  id="'.$row->booked_by.'"  data-original-title="Send Reminder" class="send_sms btn btn-primary btn-sm">Send Sms Reminder</a>';
                return $btn;

            })
            ->rawColumns(['user_details','action'])
            ->make(true);
        }

        return view('donor.dashboard.donation_bookings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donor.dashboard.donation_bookings');
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
            'donate_from' => 'required|max:255',
            'date_booked' => 'required|max:255',
            'hidden_hospital_id' => 'required|max:255'
        ]);
        if($validator->passes())
        {
        
        $user = Auth::guard('user')->user();
         $booking =  DonationBooking::create([
            'donation_place' => $request->donate_from,
            'user_location' => $request->user_location,
            'date_booked' => $request->date_booked,
            'hospital_id'  => $request->hidden_hospital_id,
            'booked_by' => $user->id,
            
          ]);

     
          
          return response()->json(['success'=>'Donation Booking Successfully Placed,Will Get Back To You Shortly']);
        }
        else {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

    }

    /**
     * Send Sms
     */

    public function sendSms(Request $request)
    {
         //
         $validator = Validator::make($request->all(),[
            'message' => 'required',
            'hidden_sms_user_id' => 'required'
            ]);
            if($validator->passes())
            {
                $user_details = User::where('id','=',$request->hidden_sms_user_id)->first();
                $receiver = ltrim($user_details->phone_no,0);
                $message = $request->message;
                $username = 'donor'; // use 'sandbox' for development in the test environment
                $apiKey   = '3b547c6ab655741258126f3bc37c0b1dcc42b3f5ce7be45e91d0b78cc384a5ef'; // use your sandbox app API key for development in the test environment
                $AT       = new AfricasTalking($username, $apiKey);
    
                // Get one of the services
                $sms      = $AT->sms();
                $number = "+254" . $receiver;
                // Use the service
              $result   = $sms->send([
                  'to'      => $number,
                  'message' => $message
              ]);
              if($result)
              {
                return response()->json(['status'=>"success","message"=>"Message Delivered Successfully", "results"=> $result]);

              }
              else
              {
                return response()->json(['status'=>"error","message"=>"Error Sending Message", "results"=> $result]);

              }

    
            
            }
            else
            {
                return response()->json(['sms_errors' => $validator->errors()->all()]);
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
