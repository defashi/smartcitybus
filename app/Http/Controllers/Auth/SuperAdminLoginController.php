<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SuperAdminLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:superadmins');
	}

    public function showLoginForm()
    {
    	return view('auth.super-admin');
    }

    public function login(Request $request)
    {
    	//validate form data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6',
            ]);

        //attempt to login 
        if (Auth::guard('superadmins')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            //if successful redirect to intended page
            return redirect()->intended(route('superadmin.dashboard'));
        }
        //if unsuccessful redirect back to login page with input data
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
