<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminTestimonial;
use App\Models\frontend\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assume middleware handles authentication
        $testimonial= AdminTestimonial::get();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('testimonial', 'FullName');
        return view('backend.testimonial')->with($data);
    }

    public function addTestimonial()
    {
        // Assume middleware handles authentication
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact( 'FullName');

        return view('backend.testimonial-add')->with($data);
    }

    public function submitTestimonialRecord(Request $request)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'name' => 'required|min:3',
                'about' => 'required|min:10',
                'statement' => 'required|min:10',
                'rate' => 'required|min:1',
                'image' => 'required|mimes:jpeg,jpg,png|max:10000'
            ]
        );

        $ImageName = 'gym_testimonial_' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('backend/images/testimonials'), $ImageName);

        $testimonial = new AdminTestimonial();
        $testimonial->name = $request->name;
        $testimonial->about = $request->about;
        $testimonial->statement = $request->statement;
        $testimonial->rate = $request->rate;
        $testimonial->image = $ImageName;
        $testimonial->save();

        return back()->withSuccess('Testimonial Record Added Successfully');
    }

    public function editTestimonial($id)
    {
        // Assume middleware handles authentication
        $testimonial = AdminTestimonial::where('id', $id)->first();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('testimonial', 'FullName');
        return view('backend.testimonial-edit')->with($data);
    }

    public function updateTestimonial(Request $request, $id)
    {
        // Assume middleware handles authentication
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

        if (isset($request->image)) {
            $ImageName = 'gym_testimonial_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/testimonials'), $ImageName);
            $testimonial->image = $ImageName;
        }

        $testimonial->name = $request->name;
        $testimonial->about = $request->about;
        $testimonial->statement = $request->statement;
        $testimonial->rate = $request->rate;
        $testimonial->save();

        return back()->withSuccess('Testimonial Record Updated Successfully');
    }

    public function deleteTestimonial($id)
    {
        // Assume middleware handles authentication
        $testimonial = AdminTestimonial::where('id', $id)->first();
        $testimonial->delete();

        return back()->withSuccess('Testimonial Record Deleted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
}
