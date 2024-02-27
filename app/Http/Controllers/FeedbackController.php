<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string', // Assuming 'fullname' is the name attribute in your form
            'email' => 'required|email',
            'comment' => 'required|string',
        ]);

        // Extracting the individual fields from the validated data
        $name = $validated['fullname'];
        $email = $validated['email'];
        $comment = $validated['comment'];

        // Passing individual fields to the FeedbackMail constructor
        Mail::to('example@example.com')->send(new FeedbackMail($name, $email, $comment));

        return redirect('/feedback/success')->with('success', 'Your feedback has been sent successfully!');
    }

    public function success()
    {
        return view('feedback.success');
    }
}
