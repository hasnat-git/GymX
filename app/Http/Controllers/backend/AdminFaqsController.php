<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\FAQs;
use Illuminate\Http\Request;

class AdminFaqsController extends Controller
{
    public function index()
    {
        // Assume middleware handles authentication
        $faqs= FAQs::get();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('faqs', 'FullName');
        return view('backend.faq')->with($data);
    }

    public function addFAQ()
    {
        // Assume middleware handles authentication
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact( 'FullName');
        return view('backend.faq-add')->with($data);
    }

    public function submitFaqRecord(Request $request)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'question' => 'required',
                'answer' => 'required'
            ]
        );

        $FAQ_STATUS = 1;
        $faqs = new FAQs();
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->status = $FAQ_STATUS;
        $faqs->save();

        return back()->withSuccess('FAQ Record Added Successfully');
    }

    public function editFAQ($id)
    {
        // Assume middleware handles authentication
        $FullName=  session('first_name') . " " . session('last_name');
        $faqs = FAQs::where('id', $id)->first();
        $data= compact('faqs', 'FullName');


        return view('backend.faq-edit')->with($data);
    }

    public function updateFAQ(Request $request, $id)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'question' => 'required',
                'answer' => 'required'
            ]
        );

        $faqs = FAQs::where('id', $id)->first();
        $FAQ_STATUS = 1;
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->status = $FAQ_STATUS;
        $faqs->save();

        return back()->withSuccess('Member Record Updated Successfully');
    }

    public function deleteFAQ($id)
    {
        // Assume middleware handles authentication
        $faqs = FAQs::where('id', $id)->first();
        $faqs->delete();

        return back()->withSuccess('Member Record Deleted Successfully');
    }
}
