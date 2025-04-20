<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.services');
  }
  public function detail(Request $request, $service_slug)
  {
    return view('front.' . $service_slug);
  }
}
