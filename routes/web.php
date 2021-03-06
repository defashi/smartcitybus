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
Route::prefix('busowner')->group(function(){
	Route::get('/login','Auth\BusOwnerLoginController@showLoginForm')->name('busowner.login');
	Route::post('/login','Auth\BusOwnerLoginController@login')->name('busowner.login.submit');
	Route::get('/','BusOwnerController@index')->name('busowner');
});

Route::prefix('superadmin')->group(function(){
	Route::get('/login','Auth\SuperAdminLoginController@showLoginForm')->name('superadmin.login');
	Route::post('/login','Auth\SuperAdminLoginController@login')->name('superadmin.login.submit');
	Route::get('/','SuperAdminController@index')->name('superadmin.dashboard');
});

Route::get('/about','PagesController@about');
Route::get('/welcome','PagesController@welcome');
Route::get('/reguser','PagesController@reguser');
Route::get('/regbus','PagesController@regbus');
Route::get('/viewroute','PagesController@viewroute');
Route::get('/viewamount','PagesController@viewamount');
Route::post('/registering','PagesController@registering');
Route::post('/register1','PagesController@register1');


