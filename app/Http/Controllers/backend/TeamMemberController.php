<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Team;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        // Assume middleware handles authentication
        $team = Team::get();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('team', 'FullName');
        return view('backend.team')->with($data);
    }

    public function registerTeam()
    {
        // Assume middleware handles authentication
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('FullName');
        return view('backend.team-add')->with($data);
    }

    public function submitTeamRecord(Request $request)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'fullname' => 'required|min:3',
                'email' => 'required|email',
                'designation' => 'required|min:3',
                'shortintro' => 'required|min:10',
                'longintro' => 'required|min:20',
                'linkedin' => 'required|min:6',
                'insta' => 'required|min:6',
                'twitter' => 'required|min:6',
                'facebook' => 'required|min:6',
                'image' => 'required|mimes:jpeg,jpg,png|max:10000'
            ]
        );

        $ADMIN_STATUS = 1;
        $ImageName = 'fs_team_' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('backend/images/team'), $ImageName);

        $team = new Team();
        $team->fullname = $request->fullname;
        $team->email = $request->email;
        $team->designation = $request->designation;
        $team->shortintro = $request->shortintro;
        $team->longintro = $request->longintro;
        $team->linkedin = $request->linkedin;
        $team->insta = $request->insta;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->image = $ImageName;
        $team->status = $ADMIN_STATUS;
        $team->save();

        return back()->withSuccess('Member Record Added Successfully');
    }

    public function editTeam($id)
    {
        // Assume middleware handles authentication
        $team = Team::where('id', $id)->first();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('team', 'FullName');
        return view('backend.team-edit')->with($data);
    }

    public function updateTeam(Request $request, $id)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'fullname' => 'required|min:3',
                'email' => 'required|email',
                'designation' => 'required|min:3',
                'shortintro' => 'required|min:10',
                'longintro' => 'required|min:20',
                'linkedin' => 'required|min:6',
                'insta' => 'required|min:6',
                'twitter' => 'required|min:6',
                'facebook' => 'required|min:6',
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
            ]
        );

        $team = Team::where('id', $id)->first();
        $ADMIN_STATUS = 1;

        if (isset($request->image)) {
            $ImageName = 'fs_team_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/team'), $ImageName);
            $team->image = $ImageName;
        }

        $team->fullname = $request->fullname;
        $team->email = $request->email;
        $team->designation = $request->designation;
        $team->shortintro = $request->shortintro;
        $team->longintro = $request->longintro;
        $team->linkedin = $request->linkedin;
        $team->insta = $request->insta;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->status = $ADMIN_STATUS;
        $team->save();

        return back()->withSuccess('Member Record Updated Successfully');
    }

    public function deleteTeam($id)
    {
        // Assume middleware handles authentication
        $team = Team::where('id', $id)->first();
        $team->delete();

        return back()->withSuccess('Member Record Deleted Successfully');
    }

    public function showTeamMember($id)
    {
        // Assume middleware handles authentication
        $team = Team::where('id', $id)->first();
        return view('backend.team-member-details', ['team' => $team]);
    }
}
