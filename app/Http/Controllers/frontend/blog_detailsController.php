<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FrontendBlog;
use Illuminate\Http\Request;

class blog_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $blog = FrontendBlog::where('id', $id)->first();
        return view('frontend.blog-details',['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

}
