<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class TicketService
{
    private $mailer;

    public function __construct($mailer)
    {

        $this->mailer = $mailer;
    }

    public function send($mail, $message)
    {
        Mail::to($mail)->send(new $this->mailer($message));
    }
}
