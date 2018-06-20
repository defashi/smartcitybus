<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\reguser;
use App\regbus;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class BusOwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:busowners');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $amounts = DB::select('SELECT * FROM regusers');
        $schools = DB::table("regusers")->sum('amount');
      return view('busowner',['schools'=>$schools],['amounts'=>$amounts]);
        
    }
}
