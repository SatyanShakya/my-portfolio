<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function index(){
        $achievements=Achievements::all();
        return view('Backend.Achievements.index',compact('achievements'));
    }

    public function create(){
        return view('Backend.Achievements.create');

    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required||string',
            'description'=> 'required||string',
        ]);

        $data=$request->all();
        Achievements::create($data);
        return redirect()->route('achievements.index')->with("success","Achievement created successfully");
    }

     public function edit($id){
        $achievement=Achievements::findorFail($id);

        return view('Backend.Achievements.edit',compact('achievement'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required|string',

            'description'=>'required|string',

        ]);

        $achievement = Achievements::findorFail($id);
        $data= $request->all();
        $achievement->update($data);

        return redirect()->route('achievements.index')->with('success','Updated successfully');
    }

    public function destroy($id){
        $achievement=Achievements::findorFail($id);
        $achievement->delete();

        return redirect()->route('achievements.index')->with('success','Deleted Successfully');
    }
}
