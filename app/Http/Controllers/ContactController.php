<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Handle form submission logic here
        $email = $request->input('cf-email');
        $name = $request->input('cf-name');
        $subject = $request->input('cf-subject') === null ? ' ' : $request->input('cf-subject');
        $message = $request->input('cf-message');
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
