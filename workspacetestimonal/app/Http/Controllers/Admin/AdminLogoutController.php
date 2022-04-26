<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
    public function Logout(){

        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login')->with('success', 'Successfully Logout');
        }
        elseif(Auth::guard('author')->check()){
            Auth::guard('author')->logout();
            return redirect()->route('admin.login')->with('success', 'Successfully Logout');
        }
       }
}
