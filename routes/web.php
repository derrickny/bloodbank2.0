<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\UserController;

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

       
    });
});
Route::post('register_user',[UserController::class,'store'])->name('register_user');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
