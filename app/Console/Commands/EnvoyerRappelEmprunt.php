<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EnvoyerRappelEmprunt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rappel:emprunt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoyer rappel apres 7 jours';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $emprunts = \App\Models\Emprunt::whereDate('created_at', '<=' , now()->subDays(7))
            ->where('rappel_envoye', false)
            ->where('rendu', false)
            ->get();

            foreach($emprunts as $emprunt)
                {
                    \Mail::raw('Veuillez retourner le livre' , function($message) use ($emprunt)
                    {
                        $message->to($emprunt->etudiant->email)
                        ->subject('Rappel emprunt');
                    });

    }
}
}
