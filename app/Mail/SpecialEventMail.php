<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SpecialEventMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $event;
    public $content;

    public function __construct($user, $event, $content)
    {
        $this->user = $user;
        $this->event = $event;
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject($this->event->email_subject)
                    ->view('emails.special_event')
                    ->with([
                        'user' => $this->user,
                        'event' => $this->event,
                        'content' => $this->content
                    ]);
    }
}