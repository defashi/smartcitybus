<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\reguser;
use App\regbus;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{
    public function about(){
    	return view('pages.about');
    }

     public function welcome(){
    	return view('welcome');
    }

      public function registering(Request $request){
      	$this->validate($request, [
               'name' => 'required',
               'surname' => 'required',
               'amount' => 'required',
               'category' => 'required',
               'gender' => 'required'
      	]);
      $reguser = new reguser;
      $reguser->name = $request->input('name');
      $reguser->surname = $request->input('surname');
      $reguser->amount = $request->input('amount');
      $reguser->category = $request->input('category');
      $reguser->gender = $request->input('gender');
      $reguser->save();
      return redirect('/reguser')->with('response', 'User Registered Successfully');	 
    }


    public function register1(Request $request){
      	$this->validate($request, [
               'platenumber' => 'required',
               'busowner' => 'required',
               'carroute' => 'required'
      	]);
      $regbus = new regbus;
      $regbus->platenumber = $request->input('platenumber');
      $regbus->busowner = $request->input('busowner');
      $regbus->carroute = $request->input('carroute');
      $regbus->save();
      return redirect('/regbus')->with('response', 'Bus Registered Successfully');	 
    }

     public function regbus(){
    	return view('pages.regbus');
    }

     public function reguser(){
    	return view('pages.reguser');
    }

     public function viewroute(){
      $makumbushos = DB::select('SELECT * FROM regbuses WHERE carroute="Simu200 to Makumbusho"');
      $buses = DB::select('SELECT * FROM regbuses WHERE carroute="Tegeta to Kariakoo"');
      return view('pages.viewroute',['buses'=>$buses],['makumbushos'=>$makumbushos]);
    }
}
