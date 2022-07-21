<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\DonationBookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDonationController;
use App\Http\Controllers\FeedbackController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Unsecured Donor URLS
Route::get('/', function () {
    return view('donor.app');
});

Route::get('registerdonor',function(){
    return view('donor.auth.register');
});

Route::get('logindonor',function(){
    return view('donor.auth.login');
});
//Donors List
Route::get('donors_list',function(){
    return view('admin.dashboard.donors_list');
});
//Hospital Login
Route::get('loginhospital',function(){
    return view('donor.auth.login');
});

//Blood Confirmation
Route::get('bloodConfirmation',function(){
    return view('donor.dashboard.blood_confirmation');
});

//Points Approval
Route::get('poitnsApproval',function(){
    return view('donor.dashboard.points_approval');
});

//Grouped Admin URLS

Auth::routes();

//Admin Guard
Route::group(['prefix' => 'admin'],function(){
    Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class,'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']],function(){
        Route::get('/',function(){
            return view('admin.dashboard.hospital.index');
        })->name('admin.dashboard');

        Route::resource('hospital',HospitalController::class);

        Route::get('view_donors',[HospitalController::class,'donors'])->name('view_donors');
        Route::post('update-hospital',[HospitalController::class,'update']);
        Route::get('stocks',[UserDonationController::class,'Stock'])->name('stocks');

        
    });
});

//User Guard
Route::group(['prefix' => 'user'],function(){
    Route::get('login', [Login::class,'showLoginForm'])->name('user.login');
    Route::post('login', [Login::class,'login'])->name('user.login.post');
    Route::post('logout', [Login::class,'logout'])->name('user.logout');
    Route::group(['middleware' => ['auth:user']],function()
    {
        Route::get('/',function(){
            return view('donor.dashboard.index');
        })->name('user.dashboard');

        Route::get('user_hospitals',[UserController::class,'hospitalList'])->name('user_hospitals');
        Route::resource('donation_bookings',DonationBookingController::class);
        Route::resource('user_donations',UserDonationController::class);
        Route::get('our-stock',[UserDonationController::class,'ourStock'])->name('our-stock');
        Route::get('other-stock',[UserDonationController::class,'othersStock'])->name('other-stock');
        Route::get('convert_rewards',[UserDonationController::class,'sumRewards'])->name('convert_rewards');
        Route::get('hospitals_list',[HospitalController::class,'Hospitals'])->name('hospitals_list');
        Route::post('convert_points',[UserDonationController::class,'convertPoints'])->name('convert_points');
        Route::post('swap',[UserDonationController::class,'swap'])->name('swap');
        Route::get('swap-list',[UserDonationController::class,'swapList'])->name('swap-list');
        Route::get('conversions-list',[UserDonationController::class,'conversionsList'])->name('conversions-list');
        Route::post('accept-swap',[UserDonationController::class,'acceptSwap'])->name('accept-swap');
        Route::post('current-stock',[UserDonationController::class,'currentStock'])->name('current-stock');
        Route::post('other-current-stock',[UserDonationController::class,'othercurrentStock'])->name('other-current-stock');
        Route::post('sendSms',[DonationBookingController::class,'sendSms'])->name('sendSms');
        Route::post('update-booking',[DonationBookingController::class,'update']);
        Route::post('edit-hospital-profile',[UserController::class,'editProfile'])->name('edit-hospital-profile');
        Route::post('update_user',[UserController::class,'updateUser'])->name('update_user');
        Route::post('edit-hospital',[UserController::class,'updateHospital'])->name('edit-hospital');
        Route::get('edit-user',[UserController::class,'editUser'])->name('edit-user');
        Route::get('stock',function(){
            return view('donor.dashboard.our_blood_stock');
        })->name('user.stocks');
        Route::get('others-stocks',function(){
            return view('donor.dashboard.others_blood_stock');
        })->name('user.others-stocks');
    });
});
Route::post('register_user',[UserController::class,'store'])->name('register_user');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('display_hospitals',[HospitalController::class,'Hospitals'])->name('display_hospitals');

Route::resource('feedbacks',FeedbackController::class);
//Routes for mailing

Route::get('/email',function() {
    Mail::to('aisacsmooth@gmail.com')->send(new WelcomeMail());
});


