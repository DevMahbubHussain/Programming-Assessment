<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\WorkspaceIT;
use App\Models\Admin;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    public function index(){
        return view('admin.forgot-password');
    }

    public function MailCheck(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $author_data = Author::where('email',$request->email)->first();
        $admin_data = Admin::where('email',$request->email)->first();
        

        if($admin_data==true) {
            $token = hash('sha256',time());
            $admin_data->token = $token;
            $admin_data->update();
            $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
            $subject = 'Reset Password';
            $message = 'Please click on the following link: <br>';
            $message .= '<a href="'.$reset_link.'">Click here</a>';

            Mail::to($request->email)->send(new WorkspaceIT($subject,$message));
            return redirect()->route('admin.login')->with('success','Please check your email and follow the steps there');

        }
        elseif($author_data==true){

            $token = hash('sha256',time());
            $author_data->token = $token;
            $author_data->update();
            $reset_link = url('author/reset-password/'.$token.'/'.$request->email);
            $subject = 'Reset Password';
            $message = 'Please click on the following link: <br>';
            $message .= '<a href="'.$reset_link.'">Click here</a>';

            Mail::to($request->email)->send(new WorkspaceIT($subject,$message));

            return redirect()->route('admin.login')->with('success','Please check your email and follow the steps there');
        }

        else{
            return redirect()->back()->with('error','Email address not found!');
        }
    }


    public function AuthorResetPassword($token,$email){
        $author_data = Author::where('token',$token)->where('email',$email)->first();
        if(!$author_data) {
            return redirect()->route('admin.login');
        }

        return view('admin.author-resetpassword',compact('token','email'));
    }


    public function ResetPassword($token,$email){

        $admin_data = Admin::where('token',$token)->where('email',$email)->first();

        if(!$admin_data) {
            return redirect()->route('admin.login');
        }
        return view('admin.reset-password',compact('token','email'));
    }


    public function PasswordUpdate(Request $request){

        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $reset_pass = Admin::where('token',$request->token)->where('email',$request->email)->first();
        $reset_pass->password = Hash::make($request->password);
        $reset_pass->token = '';
        $reset_pass->update();

        return redirect()->route('admin.login')->with('success', 'Password is reset successfully');


    }

    public function AuthorPasswordUpdate(Request $request){
        
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $reset_pass = Author::where('token',$request->token)->where('email',$request->email)->first();
        $reset_pass->password = Hash::make($request->password);
        $reset_pass->token = '';
        $reset_pass->update();

        return redirect()->route('admin.login')->with('success', 'Password is reset successfully');
    }
}
