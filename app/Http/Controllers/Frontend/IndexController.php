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
    public function index()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        $skills = Skills::all();
        $achievements = Achievements::all();
        return view('Frontend.about', compact('skills', 'achievements'));
    }

    public function project()
    {

        $projects = Project::latest()->get();

        return view('Frontend.projects', compact('projects'));
    }


    public function projectDetail($id)
    {
        $projects = Project::where('id', $id)->get();
        if (!$projects) {
            abort(404);
        }
        return view('Frontend.projectdetail', compact('projects'));
    }

    public function resume()
    {

        $resumes = Resume::latest()->get();

        return view('Frontend.resumes', compact('resumes'));
    }


    public function contact()
    {

        return view('Frontend.contact');
    }

    public function send(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Send email
            Mail::send([], [], function ($message) use ($request) {
                $message->to('satyanshakya@gmail.com')  // Your email
                        ->subject($request->subject)    // Subject from form
                        ->from($request->email, $request->name)
                        ->setBody('Message: '.$request->message);
            });
        } catch (\Exception $e) {
            // Log the exception message for debugging
            \Log::error('Mail send failed: '.$e->getMessage());
            return back()->with('error', 'Failed to send message. Please try again.');
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }


}
