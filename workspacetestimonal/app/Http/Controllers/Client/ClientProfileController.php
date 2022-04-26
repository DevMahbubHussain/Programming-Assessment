<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientProfileController extends Controller
{
    public function index(){
        return view('admin.client-profile');
    }

    public function UpdateClientProfile(Request $request){
        $client_profile_data = Author::where('email',Auth::guard('author')->user()->email)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        if($request->password!='') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            $client_profile_data = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            //unlink(public_path('admin/uploads/'.$client_profile_data->photo));
            $ext = $request->file('photo')->extension();
            $final_name = 'author'.'.'.$ext;
            $request->file('photo')->move(public_path('admin/uploads/'),$final_name);
            $client_profile_data->photo = $final_name;
        }

        $client_profile_data->name = $request->name;
        $client_profile_data->email = $request->email;
        $client_profile_data->update();
        return redirect()->back()->with('success', 'Profile information is Updated successfully.');
    }
}
