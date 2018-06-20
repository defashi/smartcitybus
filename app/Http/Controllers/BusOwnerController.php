<?php

namespace App\Http\Controll;
use Illuminate\Http\Request;
use App\reguser;
use App\regbus;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Control;
class BusOwnerController  Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct($gvs)
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
        $schools = DB::table("regusers"),('amount');
      return view('busowner',['schools'=>$schools],['amounts'=>$amots]);
        
    }
}
