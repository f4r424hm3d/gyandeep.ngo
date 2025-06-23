<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index(Request $request)
  {
    $pdf = Pdf::loadView('test.test-print-letter')->setPaper('a4', 'portrait')->setWarnings(false);

    $file_name = slugify('score-result') . '_' . date('dmY_His') . '.pdf';

    if ($request->has('download')) {
      return $pdf->download($file_name);
    } else {
      return $pdf->stream($file_name);
    }
  }
}
