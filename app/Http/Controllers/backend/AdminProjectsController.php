<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Projects;

class AdminProjectsController extends Controller
{
    public function index()
    {

        // Assume middleware handles authentication
        $project= Projects::get();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('project', 'FullName');
        return view('backend.projects')->with($data);
    }

    public function addProject()
    {
        // Assume middleware handles authentication
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact( 'FullName');
        return view('backend.project-add')->with($data);
    }

    public function submitProjectRecord(Request $request)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'title' => 'required|min:3',
                'details' => 'required|min:10',
                'link' => 'required|min:3',
                'category' => 'required|min:3',
                'technology' => 'required|min:3',
                'client' => 'required|min:3',
                'image' => 'required|mimes:jpeg,jpg,png|max:10000'
            ]
        );

        $PROJECT_STATUS = 1;
        $ImageName = 'fs_team_' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('backend/images/projects'), $ImageName);

        $projects = new Projects();
        $projects->title = $request->title;
        $projects->details = $request->details;
        $projects->link = $request->link;
        $projects->category = $request->category;
        $projects->technology = $request->technology;
        $projects->client = $request->client;
        $projects->image = $ImageName;
        $projects->status = $PROJECT_STATUS;
        $projects->save();

        return back()->withSuccess('Project Record Added Successfully');
    }

    public function editProject($id)
    {
        // Assume middleware handles authentication
        $project = Projects::where('id', $id)->first();
        $FullName=  session('first_name') . " " . session('last_name');
        $data= compact('project', 'FullName');
        return view('backend.project-edit')->with($data);
    }

    public function updateProject(Request $request, $id)
    {
        // Assume middleware handles authentication
        $request->validate(
            [
                'title' => 'required|min:3',
                'details' => 'required|min:10',
                'link' => 'required|min:3',
                'category' => 'required|min:3',
                'technology' => 'required|min:3',
                'client' => 'required|min:3',
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000'
            ]
        );

        $projects = Projects::where('id', $id)->first();
        $PROJECT_STATUS = 1;

        if (isset($request->image)) {
            $ImageName = 'fs_team_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/projects'), $ImageName);
            $projects->image = $ImageName;
        }

        $projects->title = $request->title;
        $projects->details = $request->details;
        $projects->link = $request->link;
        $projects->category = $request->category;
        $projects->technology = $request->technology;
        $projects->client = $request->client;
        $projects->status = $PROJECT_STATUS;
        $projects->save();

        return back()->withSuccess('Project Record Updated Successfully');
    }

    public function deleteProject($id)
    {
        // Assume middleware handles authentication
        $projects = Projects::where('id', $id)->first();
        $projects->delete();

        return back()->withSuccess('Project Record Deleted Successfully');
    }
}
