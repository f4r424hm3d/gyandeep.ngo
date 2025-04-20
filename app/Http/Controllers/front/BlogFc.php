<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.blog');
  }
  public function detail(Request $request, $blog_slug)
  {
    return view('front.' . $blog_slug);
  }
}
