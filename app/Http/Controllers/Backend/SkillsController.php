<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    public function index(){
        $skills=Skills::all();
        return view('Backend.Skills.index', compact('skills'));
    }

    public function create(){
        return view('Backend.Skills.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=> 'required|string',
            'rate'=> 'required|string',

        ]);

        $data=$request->all();

        Skills::create($data);

        return redirect()->route('skills.index')->with('success','Skills added successfully');

    }

    public function edit($id){

        $skill=Skills::findorFail($id);

        return view('Backend.Skills.edit',compact('skill'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required|string',
            'name'=> 'required|string',

        ]);

        $skill=Skills::findorFail($id);

        $data=$request->all();
        $skill->update($data);

        return redirect()->route('skills.index')->with('success','Skills updated successfully');
    }

    public function destroy($id){
        $skill=Skills::findorFail($id);

        $skill->delete();

        return redirect()->route('skills.index')->with('success','Deleted successfully');
    }


}
