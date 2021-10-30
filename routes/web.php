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


Route::get('/','HomeController@index')->name('home');



//**********************************************************************************************************//
//admin part -->
Route::get('admin_login','adminController@adminLogin')->name('admin.login');
Route::post('admin_login_check','adminController@adminLoginCheck')->name('admin.login.check');

Route::get('sign-up','adminController@adminSignup')->name('admin.signup');
Route::post('admin_sighup_check','adminController@adminSighupCheck')->name('admin.signup.check');



//***********************************************************************************************************//
//user -->

Route::get('user_login','userController@login')->name('user.login');
Route::get('user_logout','userController@userlogout')->name('user.logout');
Route::post('/user_login_check','userController@loginCheck')->name('login.check');

Route::get('user_signup','userController@signup')->name('user.signup');
Route::post('user_sighup_check','userController@userSighupCheck')->name('user.signup.check');

//**********************************************************************************************************//

//product detels ->>>

Route::get('product_details/{id}','productController@details')->name('product.details');
//-------------------------------------------------------------------------------------------------//

Route::get('/sendmail','productController@sendmail')->name('send.mail');

Route::get('/email_verify','productController@mail')->name('mail.verify');



//______________________________________________________________________________________________________________//



?>


  
  





   




