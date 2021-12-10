<?php

use App\Mail\TicketMail;
use App\Services\Ticket;
use App\Services\TicketService;
use Illuminate\Support\Facades\Route;

Route::get('/send', function () {

    $ticket = new TicketService(TicketMail::class);

    $ticket->send('abs@abc.com', 'Hello abs, THIS IS A TICKET');

});


Route::get('/facade', function () {

    Ticket::send('abs@abc.com', 'Hello abs, THIS IS A TICKET');

});
