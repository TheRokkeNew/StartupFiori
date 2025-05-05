<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; //Destinatario ($user)
    public $event; //Evento da pubblicizzare ($event)

    public function __construct($user, $event)
    {
        $this->user = $user;
        $this->event = $event;
    }

    //Riceve i dati (utente + evento) tramite il costruttore.
    //Imposta l'oggetto dell'email (es: "OffertaSan Valentino").
    //Collega il template HTML (emails.event.blade.php) passandogli i dati.

    public function build()
    {
        return $this->subject("Offerta {$this->event->name}")
                    ->view('emails.event')
                    ->with([
                        'user' => $this->user,
                        'event' => $this->event,
                    
                    ]);
    }
}