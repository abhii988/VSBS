<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth','admin']], function(){
//     Route::get('/dashboard', function() {
//         return view('admin.dashboard');
//     });
//     Route::get('/service', function() {
//         return view('admin.service');
//     });
//     Route::get('/users', function() {
//         return view('admin.users');
//     });
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/service', [App\Http\Controllers\AdminController::class, 'index1'])->name('admin.service');
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'index2'])->name('admin.users');
});
//Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
//Route::get('/service', [App\Http\Controllers\AdminController::class, 'index1'])->name('admin.service');
//Route::get('/users', [App\Http\Controllers\AdminController::class, 'index2'])->name('admin.users');
//Route::get('/admin/service', function () {
//    return view('admin.service');
//});
//Route::get('/admin/users', function () {
//    return view('admin.users');
//});

Auth::routes();

// Route::group(['middleware'=>'auth'], function(){

// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('accessories', function () {return view('accessories');});
//Route::get('/service', [App\Http\Controllers\BookingsController::class, 'index'])->name('service');
//Route::post('/service', [App\Http\Controllers\BookingsController::class, 'store'])->name('service.store');
Route::get('/booking', [App\Http\Controllers\BookingsController::class, 'index'])->name('booking');
Route::post('/booking', [App\Http\Controllers\BookingsController::class, 'store'])->name('booking.store');
Route::get('/centre', [App\Http\Controllers\HomeController::class, 'index2'])->name('centre');
Route::get('/accessories', [App\Http\Controllers\HomeController::class, 'index3'])->name('accessories');
Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles');
Route::post('/vehicles', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicles.store');

//Route::resource('booking', [App\Http\Controllers\BookingsController::class]);

// -----------------------------login-----------------------------------------
// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// // ------------------------------register---------------------------------------
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');
