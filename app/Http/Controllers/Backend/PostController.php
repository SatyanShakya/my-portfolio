<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PostController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('Backend.Projects.index',compact('projects'));

    }

    public function create(){
        return view('Backend.Projects.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string',
            'tools'=>'required',
            'summary'=>'required',
            'description'=>'required',
            'link' => 'nullable|url',
        ]);

        $data=$request->all();
        $project= Project::create($data);
        $project->save();

        return redirect('Backend.Project.index')->with("success","Project created successfully");


    }


}
