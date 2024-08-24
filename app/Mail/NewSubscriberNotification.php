<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSubscriberNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriberEmail;

    public function __construct($subscriberEmail)
    {
        $this->subscriberEmail = $subscriberEmail;
    }

    public function build()
    {
        return $this->view('emails.new_subscriber_notification')->with(['subscriberEmail' => $this->subscriberEmail])->subject('New Subscriber Notification');
    }
}
