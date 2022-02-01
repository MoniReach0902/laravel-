<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
    }
    public function dashboard(){
        return view('admin.index');
    }
    public function login(Request $request){
       $check=$request->all();
       if(Auth::guard('admin')->attempt(['email'=>$check['email'], 'password'=>$check['password']])){
           return redirect()->route('admin.dashboard')->with('error','Admin Login Successfully');
       }else{
           return back()->with('error','Invaild Email Or Password');
       }
    }

}
