<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;

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
    return view('donor/app');
});

Route::get('registerdonor',function(){
    return view('donor/auth/register');
});

Route::get('logindonor',function(){
    return view('donor/auth/login');
});

//Grouped Admin URLS

Auth::routes();
Route::group(['prefix' => 'admin'],function(){
    Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class,'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']],function(){
        Route::get('/',function(){
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
