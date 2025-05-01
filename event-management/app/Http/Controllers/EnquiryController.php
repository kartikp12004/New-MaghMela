<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnquiryController extends Controller
{
    public function show()
    {
        return view('frontend.pages.enquiry');
    }

    // app/Http/Controllers/EnquiryController.php

public function submit(Request $req)
{
    $data = $req->validate([
        'name'     => 'required|string',
        'email'    => 'required|email',
        'phone'    => 'required|string',
        'country'  => 'required|string',
        'date'     => 'required|date',
        'duration' => 'required|integer|min:1',
        'msg'      => 'required|string',
    ]);

    // Forward to Google Docs via Apps Script
    Http::post('https://script.google.com/macros/s/AKfycbyAbdnPT41VJM4hcYWbENb6xC0q8qfIgOR9n96bcEY-ZKVm6L0f9cJaRLVipJBnL_hz/exec', $data);

    return back()->with('success', 'Thank you! Your enquiry has been received. We’ll contact you within 6 hours.');
}

}
