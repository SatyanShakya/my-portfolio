<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $resumes=Resume::all();
        return view('Backend.Resume.index',compact('resumes'));
    }

    public function create(){
        return view('Backend.Resume.create');

    }

    public function store(Request $request){
        $request->validate([
            'file' => 'required|file|mimes:pdf|max:2048', // File must be a PDF and max size is 2MB
        ]);

        // Store the file in the 'resumes' directory in the 'storage/app/public' folder
        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/resumes', $fileName);

            // Save the file name to the database
            Resume::create(['file' => $fileName]);
        }

        return redirect()->route('resumes.index')->with("success","Resume created successfully");
    }

     public function edit($id){
        $resumes=Resume::findorFail($id);

        return view('Backend.Resumes.edit',compact('resumes'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'file' => 'nullable|file|mimes:pdf|max:2048', // File is optional, but must be a PDF and max size 2MB
        ]);

        $resume = Resume::findOrFail($id);

        // Check if a new file is uploaded
        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/resumes', $fileName);

            // Update the file name in the database
            $resume->update(['file' => $fileName]);
        }


        return redirect()->route('resumes.index')->with('success','Updated successfully');
    }

    public function destroy($id){
            $resume = Resume::findOrFail($id);

            // Delete the file from the storage
            Storage::delete('public/resumes/' . $resume->file);

            // Delete the record from the database
            $resume->delete();

        return redirect()->route('resumes.index')->with('success','Deleted Successfully');
    }
}
