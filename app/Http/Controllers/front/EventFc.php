<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.events');
  }
  public function detail(Request $request, $event_slug)
  {
    $question = generateMathQuestion();
    session(['captcha_answer' => $question['answer']]);
    $data = compact('question');
    return view('front.' . $event_slug)->with($data);
  }
}
