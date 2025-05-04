<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subscriptionsController extends Controller
{
    public function index()
    {
        $FullName=  session('first_name');
        $data=compact('FullName');
        return view('backend.subscriptionplan')->with($data);
    }
    public function addsubscription()
    {
        $FullName=  session('first_name');
        $data=compact('FullName');
        return view('backend.subscriptionplan-add')->with($data);
    }
}
