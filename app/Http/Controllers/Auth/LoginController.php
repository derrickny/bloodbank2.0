<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\User;
use App\Models\Userlogin;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');

    }


      /**
       * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
       */
      public function showLoginForm()
      {
          return view('donor.auth.login');
      }

      /**
       * @param Request $request
       *@return \Illuminate\Http\RedirectResponse
       *@throws \Illuminate\Validation\ValidationException
       */

      public function login(Request $request)
      {
          $this->validate($request,[
              'email' => 'required|email',
              'password' => 'required|min:6'
          ]);
          if(Auth::guard('user')->attempt([
              'email' => $request->email,
              'password' => $request->password
          ],$request->get('remember')))
          {
              

              
              return response()->json(['login_success'=>'Successfully Logged In']);

          }
          return response()->json(['login_errors' => "Invalid Credentials"]);

      }


       /**
        * @param Request $request
        *@return \Illuminate\Contracts\View\Factory\Illuminate\View\View
        */

        public function logout(Request $request)
        {
            
            
            Auth::guard('user')->logout();
            $request->session()->invalidate();
            return redirect()->route('user.login');
        //   return  response()->json(['status'=>'success','user_details'=>$updated_login,'Message','User Logged Out']);
        }

}
