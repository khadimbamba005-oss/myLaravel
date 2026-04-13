<?php

namespace App\Console ;
use illuminate\Console\Scheuling\Schedule;
use illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel{

    protected  function schedule(Schedule $schedule)
    {
        $schedule->command('rappel:emprunt')->daily();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
