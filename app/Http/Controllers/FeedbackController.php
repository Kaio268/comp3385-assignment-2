<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback; // Import the Feedback Mailable class
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create()
    {
        // Return the view for the feedback form
        return view('feedback-form');
    }

    public function send(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        // Send the feedback email
        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
            ->send(new Feedback(
                $validatedData['fullname'],
                $validatedData['email'],
                $validatedData['comment']
            ));

        // Redirect to the success page with a success message
        return redirect('/feedback/success')->with('success', 'Your feedback has been sent successfully!');
    }
}
