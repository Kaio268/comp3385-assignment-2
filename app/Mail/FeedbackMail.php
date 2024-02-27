<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Set the sender and subject for the email
        return $this->from($this->email, $this->name)
                    ->subject('Feedback from ' . $this->name)
                    ->view('mail.feedback')
                    ->with([
                        'name' => $this->name,
                        'comment' => $this->comment,
                    ]);
    }
}
