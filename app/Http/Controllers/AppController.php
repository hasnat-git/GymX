<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $FullName=  session('first_name');
        $data=compact('FullName');
        return view('backend.appusers')->with($data);
    }
}
