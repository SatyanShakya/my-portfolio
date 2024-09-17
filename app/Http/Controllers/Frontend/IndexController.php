<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skills;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }

    public function about(){
        $skills=Skills::all();
        $achievements=Achievements::all();
        return view('Frontend.about',compact('skills','achievements'));
    }

    public function project(){

        $projects=Project::latest()->get();

        return view('Frontend.projects', compact('projects'));
    }

    public function resume(){

        $resumes=Resume::latest()->get();

        return view('Frontend.resumes', compact('resumes'));
    }


    public function contact(){

        return view('Frontend.contact');
    }

}
