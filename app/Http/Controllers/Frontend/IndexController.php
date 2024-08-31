<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }

    public function about(){
        return view('Frontend.about');
    }


}
