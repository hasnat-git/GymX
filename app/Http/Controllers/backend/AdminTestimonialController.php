<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminTestimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session()->has('email')){
            return view('backend.testimonial', ['testimonial'=>AdminTestimonial::get()]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function addTestimonial()
    {
        if(session()->has('email')){
            return view('backend.testimonial-add');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function submitTestimonialRecord(Request $request)
    {
        // dd($request->all());
        if(session()->has('email')){
            $request->validate(
                [
                    'name' => 'required|min:3',
                    'about' => 'required|min:10',
                    'statement' => 'required|min:10',
                    'rate' => 'required|min:1',
                    'image' => 'required|mimes:jpeg,jpg,png|max:10000'
                ]);
            $ImageName = 'gym_testimonial_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/testimonials'), $ImageName);
            // dd($ImageName);
            $testimonial = new AdminTestimonial();
            $testimonial->name = $request->name;
            $testimonial->about = $request->about;
            $testimonial->statement = $request->statement;
            $testimonial->rate = $request->rate;
            $testimonial->image = $ImageName;
            $testimonial->save();
            return back()->withSuccess('testimonial Record Added Successfully');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function editTestimonial($id)
    {
            // dd($id);
        if(session()->has('email')){
            $testimonial = AdminTestimonial::where('id', $id)->first();
            return view('backend.testimonial-edit', ['testimonial' => $testimonial]);
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function updateTestimonial(Request $request, $id)
    {
        if(session()->has('email')){
            $request->validate(
                [
                    'name' => 'required|min:3',
                    'about' => 'required|min:10',
                    'statement' => 'required|min:10',
                    'rate' => 'required|min:1',
                    'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
                ]
                );

            $testimonial = AdminTestimonial::where('id', $id)->first();

            if(isset($request->image))
            {
                $ImageName = 'gym_product_' . time() . '.' . $request->image->extension();
                $request->image->move(public_path('backend/images/testimonials'), $ImageName);
                $testimonial->image = $ImageName;
            }
            $testimonial->name = $request->name;
            $testimonial->about = $request->about;
            $testimonial->statement = $request->statement;
            $testimonial->rate = $request->rate;
            $testimonial->save();
            return back()->withSuccess('Testimonial Record Updated Successfully');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function deleteTestimonial($id)
    {
        if(session()->has('email')){
            $testimonial = AdminTestimonial::where('id', $id)->first();
            $testimonial->delete();
            return back()->withSuccess('Testimonial Record Deleted Successfully');
        } else {
            return redirect()->route('admin.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */

}
