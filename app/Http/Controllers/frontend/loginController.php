<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function onLogin(Request $request)
    {

        $user = User::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
        if($user){
            session()->put('id', $user->id);
            session()->put('name', $user->name);
            session()->put('email', $user->email);
            return redirect('/login')->with('success', 'Login Success');

        } else {
            return redirect('/login')->with('error', 'Invalid Credentials.');
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function logoutUser(){

        session()->forget('id');
        session()->forget('name');
        session()->forget('email');
        return redirect('/login')->with('success', 'Logout Success');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
