<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.index');
  }

  public function about(Request $request)
  {
    return view('front.about');
  }

  public function team(Request $request)
  {
    return view('front.team');
  }

  public function donationDetail(Request $request)
  {
    return view('front.donation-details');
  }


  public function mbbsScholarship(Request $request)
  {
    $question = generateMathQuestion();
    session(['captcha_answer' => $question['answer']]);
    $data = compact('question');
    return view('front.mbbs-scholarship')->with($data);
  }

  public function contact(Request $request)
  {
    $question = generateMathQuestion();
    session(['captcha_answer' => $question['answer']]);
    $data = compact('question');
    return view('front.contact')->with($data);
  }

  public function faq(Request $request)
  {
    return view('front.faq');
  }

  public function tc(Request $request)
  {
    return view('front.terms-and-condition');
  }

  public function privacyPolicy(Request $request)
  {
    return view('front.privacy-policy');
  }
  public function thankYou(Request $request)
  {
    return view('front.thank-you');
  }
}
