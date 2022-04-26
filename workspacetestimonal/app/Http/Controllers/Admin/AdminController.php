<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRegistration;
use App\Models\Admin;
use App\Models\Author;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Test;

class AdminController extends Controller
{
    public function index(){
        $totalTestimonial = Testimonial::count();
        $totalClients = Author::count();
        $publishTestimonial = Testimonial::where('confirmed',1)->count();
        $unpublishTestimonial = Testimonial::where('confirmed',0)->count();
        return view('admin.dashboard',compact('totalTestimonial','totalClients','publishTestimonial','unpublishTestimonial'));
    }
    public function Admintestimonial(){

        $Alltestimonial = Testimonial::all();
        return view('admin.admin-testimonial.index',compact('Alltestimonial'));
    }

    public function Publishtestimonial($id){
        $ptes = Testimonial::findorFail($id);
        $ptes->confirmed = 1;
        $ptes->update();
        return redirect()->back()->with('success', 'Testimonial Published !');
    }
    public function Unpublishtestimonial($id){
        $unptes = Testimonial::findorFail($id);
        $unptes->confirmed = 0;
        $unptes->update();
        return redirect()->back()->with('success', 'Testimonial Published !');
    }
    public function Allclients(){
        $AllClients = Author::all();
        return view('admin.all-clients',compact('AllClients'));
    }

    public function Adminregister(){
        return view('admin.admin-registertion');
    }
    public function Save(AdminRegistration $request){
     
        $clients = New Admin();
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->password = Hash::make($request->password);
        $clients->save();
        return redirect()->route('admin.login')->with('success', 'Registration successfully.');
        
       }

}
