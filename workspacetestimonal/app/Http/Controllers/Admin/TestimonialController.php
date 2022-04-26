<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Author;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonials.index');
    }
    public function Authortestimonial(){

        $specific_author_testimonial = Testimonial::where('author_id',Auth::guard('author')->user()->id)->get();
        return view('admin.testimonials.all-testimonial',compact('specific_author_testimonial'));
    }

    public function store(StoreRequest $request){

            if ($request->hasFile('author_image')) {
            
                $request->validate([
                    'photo' => 'image|mimes:jpg,jpeg,png,gif'
                ]);
                // $ext = $request->file('author_image')->extension();
                // $final_name = 'testimonial'.'.'.$ext;
                // $request->file('author_image')->move(public_path('admin/uploads/'),$final_name);
                // $testimonial->author_image = $final_name;
                $now = time();
                $ext = $request->file('author_image')->extension();
                $final_name = 'author_image'.$now.'.'.$ext;
                $request->file('author_image')->move(public_path('admin/uploads/'),$final_name);
            }
            $testimonial = new Testimonial();
            $testimonial->message = strip_tags($request->message);
            $testimonial->author_name = $request->author_name;
            $testimonial->author_designation = $request->author_designation;
            $testimonial->author_website = $request->author_website;
            $testimonial->confirmed = 0;
            $testimonial->author_id  = Auth::guard('author') ? Auth::guard('author')->user()->id : 0;
            $testimonial->author_image = $final_name;
            $testimonial->save();
            return redirect()->back()->with('success', 'Created Successfully. Once Admin is approved your message will apear in our Website');
            
    }

    public function Testimonialedit($id){

      $testimonial = Testimonial::findorFail($id);
      
       return view('admin.testimonials.update-testimonial',compact('testimonial'));
        
    }

    public function TestimonialUpdate(StoreRequest $request,$id){


        $testimonial = Testimonial::findorFail($id);

        if ($request->hasFile('author_image')) {
            
            $request->validate([
                'author_image' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
           // unlink(public_path('admin/uploads/'.$testimonial->author_image));
            // $ext = $request->file('author_image')->extension();
            // $final_name = 'testimonial'.'.'.$ext;
            // $request->file('author_image')->move(public_path('admin/uploads/'),$final_name);
            // $testimonial->author_image = $final_name;

            // $q = DB::select("SHOW TABLE STATUS LIKE 'testimonials'");
            // $ai_id = $q[0]->Auto_increment;

            $now = time();
            $ext = $request->file('author_image')->extension();
            $final_name = 'author_image'.$now.'.'.$ext;
            $request->file('author_image')->move(public_path('admin/uploads/'),$final_name);
        }

        $testimonial->message = strip_tags($request->message);
        $testimonial->author_name = $request->author_name;
        $testimonial->author_designation = $request->author_designation;
        $testimonial->author_website = $request->author_website;
        $testimonial->author_image = $final_name;

        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial Updated Successfully');
    }

    public function TestimonialDelete($id){
       
        $testimonial = Testimonial::findorFail($id);
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial Deleted Successfully');
    }
}
