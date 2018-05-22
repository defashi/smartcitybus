<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function login()
    {
    	return true;
    }
}
