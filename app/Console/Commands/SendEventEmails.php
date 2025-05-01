<?php

namespace App\Console\Commands;

use App\Models\Event;
use App\Models\User;
use App\Mail\EventMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendEventEmails extends Command
{
    //signature: Definisce il nome del comando (php artisan emails:send-events)
    protected $signature = 'emails:send-events';
    //description: Descrizione visualizzata quando si lista i comandi con php artisan list
    protected $description = 'Invia email per eventi stagionali';

    public function handle()
{
    //Debug iniziale
    $this->info("=== INIZIO ESECUZIONE ===");
    
    
    //$today = now()->format('Y-m-d');
    $today = '2025-02-14'; //QUI FORZO IL GIORNO 24-02-2025 PER VEDERE SE FUNZIONA
    $this->info("Data odierna: {$today}");

    //Trova eventi da EventsTableSeeder con data=oggi
    $events = Event::whereDate('date', $today)
                ->where('active', true) //eventi settati a true
                ->get();
    //Conteggio eventi trovati
    $this->info("Eventi trovati: {$events->count()}");
    
    //Se non trova eventi
    if ($events->isEmpty()) {
        $this->error("Nessun evento attivo oggi!");
        return;
    }

    //Recupera solo gli utenti che hanno verificato l'email NON SAPREI SE HA QUALCHE COLLEGAMENTO CON LA REGISTRAZIONE
    $users = User::whereNotNull('email_verified_at')->get();
    $this->info("Utenti verificati: {$users->count()}");

    //Doppio ciclo per inviare a tutti gli utenti per ogni evento trovato
    foreach ($events as $event) {
        foreach ($users as $user) {
            try {
                Mail::to($user->email)
                    ->send(new EventMail($user, $event));
                
                $this->info("Inviata a {$user->email}");
            } catch (\Exception $e) {
                $this->error("Errore per {$user->email}: {$e->getMessage()}");
            }
        }
    }

    $this->info("=== OPERAZIONE COMPLETATA ===");
}
}