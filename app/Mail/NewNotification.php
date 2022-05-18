<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $body, $subject, $recipient;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body, $subject, $recipient)
    {
        $this->body =  $body;
        $this->subject = $subject;
        $this->recipient = $recipient;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notification',[
            'body' => $this->body,
            'recipient' => $this->recipient,
        ])
        ->subject($this->subject);
    }
}
