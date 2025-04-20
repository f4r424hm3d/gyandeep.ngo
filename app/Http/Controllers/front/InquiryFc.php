<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Rules\MathCaptchaValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryFc extends Controller
{
  public function mbbsScholarshipApplication(Request $request)
  {
    // printArray($request->toArray());
    // die;
    $request->validate([
      'captcha_answer' => ['required', 'numeric', new MathCaptchaValidationRule()],
      'name' => 'required|string|max:100|regex:/^[A-Za-z\s]+$/',
      'email' => 'required|email|max:100|regex:/^[^<>]*$/',
      // 'country_code' => 'required|numeric|digits_between:1,4',
      'mobile' => 'required|numeric|digits_between:7,15',
      'nationality' => 'required|string|max:50|regex:/^[A-Za-z\s]+$/',
      'city' => 'required|string|max:100|regex:/^[^<>]*$/',
      // 'country' => 'nullable|string|max:50|regex:/^[A-Za-z\s]+$/',
      'have_passport' => 'required|boolean',
      'neet_qualified' => 'required|boolean',
      'marksheet' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
      'passport' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
      'income_certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
      // 'subject' => 'nullable|string|max:150|regex:/^[^<>]*$/',
      'message' => 'nullable|string|max:1000|regex:/^[^<>]*$/',
      'source' => 'required|string|max:100|regex:/^[^<>]*$/',
      'source_path' => 'required|url|max:255',
    ]);

    $field = new Lead();
    $field->name = strip_tags($request->name);
    $field->email = strip_tags($request->email);
    // $field->country_code = $request->country_code;
    $field->mobile = $request->mobile;
    $field->nationality = strip_tags($request->nationality);
    $field->city = strip_tags($request->city);
    // $field->country = strip_tags($request->country);
    $field->have_passport = $request->have_passport;
    $field->neet_qualified = $request->neet_qualified;
    // $field->subject = strip_tags($request->subject);
    $field->message = strip_tags($request->message);
    $field->source = strip_tags($request->source);
    $field->source_path = strip_tags($request->source_path);

    // Handle file uploads
    if ($request->hasFile('marksheet')) {
      $fileOriginalName = $request->file('marksheet')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('marksheet')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('marksheet')->move('uploads/documents/', $file_name);
      if ($move) {
        $field->marksheet = 'uploads/documents/' . $file_name;
      }
    }
    if ($request->hasFile('passport')) {
      $fileOriginalName = $request->file('passport')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('passport')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('passport')->move('uploads/documents/', $file_name);
      if ($move) {
        $field->passport = 'uploads/documents/' . $file_name;
      }
    }
    if ($request->hasFile('income_certificate')) {
      $fileOriginalName = $request->file('income_certificate')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('income_certificate')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('income_certificate')->move('uploads/documents/', $file_name);
      if ($move) {
        $field->income_certificate = 'uploads/documents/' . $file_name;
      }
    }

    $field->save();

    session()->flash('smsg', 'Your application has been submitted successfully!');

    $emaildata = [
      'name' => $request['name'],
      'email' => $request['email'],
      'mobile' => $request['mobile'],
      'nationality' => $request['nationality'],
      'city' => $request['city'],
      'sbj' => $request['subject'],
      'msg' => $request['message'],
      'source' => $request['source'],
      'source_path' => $request['source_path'],
    ];
    $dd = ['to' => $request['email'], 'to_name' => $request['name'], 'subject' => 'We have Received Your Request – Expect a Response Soon'];

    Mail::send(
      'mails.inquiry-reply',
      $emaildata,
      function ($message) use ($dd) {
        $message->to($dd['to'], $dd['to_name']);
        $message->subject($dd['subject']);
        $message->priority(1);
      }
    );

    $dd2 = ['to' => TO_EMAIL, 'cc' => CC_EMAIL, 'to_name' => TO_NAME, 'cc_name' => CC_NAME, 'subject' => 'New Enquiry Alert – Team Attention Needed', 'bcc' => BCC_EMAIL, 'bcc_name' => BCC_NAME];

    Mail::send(
      'mails.inquiry-mail-to-team',
      $emaildata,
      function ($message) use ($dd2) {
        $message->to($dd2['to'], $dd2['to_name']);
        $message->cc($dd2['cc'], $dd2['cc_name']);
        $message->bcc($dd2['bcc'], $dd2['bcc_name']);
        $message->subject($dd2['subject']);
        $message->priority(1);
      }
    );
    return redirect('thank-you');
  }
  public function contact(Request $request)
  {
    // printArray($request->toArray());
    // die;
    $request->validate([
      'captcha_answer' => ['required', 'numeric', new MathCaptchaValidationRule()],
      'name' => 'required|string|max:100|regex:/^[A-Za-z\s]+$/',
      'email' => 'required|email|max:100|regex:/^[^<>]*$/',
      'subject' => 'nullable|string|max:150|regex:/^[^<>]*$/',
      'message' => 'nullable|string|max:1000|regex:/^[^<>]*$/',
      'source' => 'required|string|max:100|regex:/^[^<>]*$/',
      'source_path' => 'required|url|max:255',
    ]);

    $field = new Lead();
    $field->name = strip_tags($request->name);
    $field->email = strip_tags($request->email);
    // $field->country_code = $request->country_code;
    // $field->mobile = $request->mobile;
    $field->subject = strip_tags($request->subject);
    $field->message = strip_tags($request->message);
    $field->source = strip_tags($request->source);
    $field->source_path = strip_tags($request->source_path);

    $field->save();

    session()->flash('smsg', 'Your application has been submitted successfully!');

    $emaildata = [
      'name' => $request['name'],
      'email' => $request['email'],
      'mobile' => $request['mobile'] ?? null,
      'nationality' => $request['nationality'] ?? null,
      'city' => $request['city'] ?? null,
      'sbj' => $request['subject'],
      'msg' => $request['message'],
      'source' => $request['source'],
      'source_path' => $request['source_path'],
    ];
    $dd = ['to' => $request['email'], 'to_name' => $request['name'], 'subject' => 'We have Received Your Request – Expect a Response Soon'];

    Mail::send(
      'mails.inquiry-reply',
      $emaildata,
      function ($message) use ($dd) {
        $message->to($dd['to'], $dd['to_name']);
        $message->subject($dd['subject']);
        $message->priority(1);
      }
    );

    $dd2 = ['to' => TO_EMAIL, 'cc' => CC_EMAIL, 'to_name' => TO_NAME, 'cc_name' => CC_NAME, 'subject' => 'New Enquiry Alert – Team Attention Needed', 'bcc' => BCC_EMAIL, 'bcc_name' => BCC_NAME];

    Mail::send(
      'mails.inquiry-mail-to-team',
      $emaildata,
      function ($message) use ($dd2) {
        $message->to($dd2['to'], $dd2['to_name']);
        $message->cc($dd2['cc'], $dd2['cc_name']);
        $message->bcc($dd2['bcc'], $dd2['bcc_name']);
        $message->subject($dd2['subject']);
        $message->priority(1);
      }
    );
    return redirect('thank-you');
  }
}
