<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('busowner','BusOwnerController@index')->name('busowner');

Route::prefix('superadmin')->group(function(){
	Route::get('/login','Auth\SuperAdminLoginController@showLoginForm')->name('superadmin.login');
	Route::post('/login','Auth\SuperAdminLoginController@login')->name('superadmin.login.submit');
	Route::get('/','SuperAdminController@index')->name('superadmin.dashboard');
});

=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> e7360d2661e5eee611ff094c76dec91001264906
