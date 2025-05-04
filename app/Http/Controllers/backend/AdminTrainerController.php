<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTrainerController extends Controller
{
    public function index()
    {
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact( 'FullName');
        return view('backend.trainer')->with($data);
    }
    public function addTrainer()
    {
        $FullName=  session('first_name') . " " . session('last_name');
        $data=compact('FullName');
        return view('backend.trainer-add')->with($data);
    }
}
