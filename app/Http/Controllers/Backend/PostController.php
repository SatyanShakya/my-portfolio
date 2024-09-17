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
            'tools'=>'required|string',
            'summary'=>'required|string',
            'description'=>'required|string',
            'url' => 'nullable|url',
            'icon_class'=> 'nullable|string',
        ]);

        $data=$request->all();

        $data['icon_class'] = $request->input('icon_class', 'fa-regular fa-star');

        Project::create($data);

        return redirect()->route('projects.index')->with("success","Project created successfully");

    }

    public function edit($id){
        $project=Project::findorFail($id);

        return view('Backend.Projects.edit',compact('project'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required|string',
            'tools'=>'required|string',
            'summary'=>'required|string',
            'description'=>'required|string',
            'url' => 'nullable|url',
            'icon_class'=> 'nullable|string',
        ]);

        $project = Project::findorFail($id);
        $data= $request->all();
        $data['icon_class'] = $request->input('icon_class', 'fa-regular fa-star');
        $project->update($data);

        return redirect()->route('projects.index')->with('success','Updated successfully');
    }

    public function destroy($id){
        $project=Project::findorFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success','Deleted Successfully');
    }

}
