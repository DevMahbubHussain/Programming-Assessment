<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function index(){
        // $pass = Hash::make('admin');
        // dd($pass);
        return view('admin.login');
    }

    public function Login(Login $request){
         
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin.dashboard')->with('success', 'Login Successfully !');
        }
        elseif(Auth::guard('author')->attempt($credential)){

            return redirect()->route('client.dashboard')->with('success', 'Login Successfully !');;
        }
        else{
            return redirect()->route('admin.login')->with('error', 'Email or Password is Incorrect !');
        }
    
    }
}
