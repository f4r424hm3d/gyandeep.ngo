<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectFc extends Controller
{
    public function index(Request $request)
    {
        return view('front.projects');
    }
    public function detail(Request $request, $project_slug)
    {
        return view('front.' . $project_slug);
    }
}
