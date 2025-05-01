<?php

//Laravel controlla continuamente lo schedule definito nel Kernel
//Quando è il momento (in questo caso ogni giorno alle 9:00), esegue il comando emails:send-events
// Il comando viene eseguito in background dal sistema di scheduling di Laravel
//LO SCHEDULING è DA CAMBIARE SE SI VUOLE AGGIORNAMENTO AUTOMATICO

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel; //Comandi kernel
use App\Console\Commands\SendEventEmails; 

class Kernel extends ConsoleKernel
{
    protected $commands = [
        SendEventEmails::class,
    ];
    //esegue il comando ogni giorno alle 09:00
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('emails:send-events')
                 ->dailyAt('09:00');
    }

    //Carica automaticamente tutti i comandi dalla cartella app/Console/Commands
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}