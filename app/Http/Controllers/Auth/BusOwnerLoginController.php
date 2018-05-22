<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class BusOwnerLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:busowners');
    }

    public function showLoginForm()
    {
    	return view('auth.busowner-login');
    }

    public function login(Request $request)
    {
    	//validate the form data
    	$this->validate($request, [
    			'email' => 'required|email',
    			'password' => 'required|min:6'
    		]);
    	//Attempt to log the user in
    	if (Auth::guard('busowners')->attempt(['email'=>$request->email,'password'=>$request->password])) {
    		//if successful redirect the user to the intended location
    		return redirect()->intended(route('busowner'));
    	}
    	//if unsuccessful, then redirect back the user with form data
    	return redirect()->back()->withInput($request->only('email','remember'));
    }
}
