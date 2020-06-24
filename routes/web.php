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
Route::redirect('/','/login');
Route::get('admin/login','Auth\AdminLoginController@showLoginForm');
Route::post('admin/login','Auth\AdminLoginController@login')->name('adminlogin');

Route::get('admin/logout','Auth\AdminLoginController@showLogoutForm');
Route::post('admin/logout','Auth\AdminLoginController@logout')->name('adminlogout');
Route::get('admin/register','Auth\AdminRegisterController@showRegistrationForm');
Route::post('admin/register','Auth\AdminRegisterController@register')->name('adminregister');
route::group(["middleware"=>"auth:admin"],function(){
    Route::resource('adm','admcontroller');
    Route::resource('ads','adscontroller');
    Route::resource('admatch','admatchcontroller');
    Route::resource('adreport','adreportcontroller');
    Route::resource('adcon','admconcontroller');
    Route::resource('user','usercontroller');
   
});

route::group(["middleware"=>"auth"],function(){
    route::get('checkuser',function(){
        return 'user success';
    });
});

Route::group(["middleware"=>'auth'],function(){
    Route::resource('prof','profileController');
    Route::resource('family','familydetailsController');
    Route::resource('education','educationalinfoController');
    Route::resource('life','lifestyleController');
    Route::resource('desire','desiredpartnerController');
    Route::resource('myprof','myprofileController');
    Route::resource('gen','generalinfoController');
    Route::resource('block','blockedController');
    Route::resource('int','intrestedController');
    Route::resource('search','searchController');
    Route::resource('noti','notificationController');
    Route::resource('msg','messageController');
    Route::resource('req','reqController');
    Route::resource('rreq','rreqController');
    Route::resource('meetreq','meetreqController');
    Route::resource('meetrreq','meetrreqController');
    Route::resource('meet','meetController');
    Route::resource('report','ReportController');
    Route::resource('contact','contactusController');
    Route::resource('matchreq','matchedreqController');
    Route::resource('matchrreq','matchedrreqController');
    Route::resource('match','matchedController');
    Route::resource('sarch','sarchcontroller');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
