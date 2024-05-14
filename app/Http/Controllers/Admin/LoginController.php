<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }
    public function checkLogin() 
     {
    //    return request()->all();
    $data=request()->only('username','password');
    // dd($data); // Dump the data to inspect
    if(auth()->guard('admin')->attempt($data)){
        return redirect()->route('admin.dashboard');
    }else{
        return "error in login";
    }
     }
     
}
