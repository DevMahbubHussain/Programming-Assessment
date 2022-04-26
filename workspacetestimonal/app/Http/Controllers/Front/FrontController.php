<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontClientRegister;
use App\Models\Author;
use App\Models\Testimonial;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
   public function index(){
       //$pulishedTestimonial = Testimonial::where('confirmed',1)->simplePaginate(5);
       $pulishedTestimonial = Testimonial::where('confirmed',1)->orderBy('created_at', 'desc')->get();
      // dd( $pulishedTestimonial);
       return view('welcome',compact('pulishedTestimonial'));

   }

   public function Clientregister(){
    return view('front.register');
   }

   public function Store(FrontClientRegister $request){
     
    $clients = New Author();
    $clients->name = $request->name;
    $clients->email = $request->email;
    $clients->password = Hash::make($request->password);
    $clients->save();
    return redirect()->route('admin.login')->with('success', 'Registration successfully.');
    
   }
}
