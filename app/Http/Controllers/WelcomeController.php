<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Emprunt;
use App\Models\Livre;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome',
    [
        'nbEtudiants'=>Etudiant::count(),
        'nbLivres'=>Livre::count(),
        'nbEmprunts'=> Emprunt::count(),
        'nbRetards'=>Emprunt::where('rendu',false)
                            ->whereDate('created_at', '<=', now()->subDays(7))
                            ->count(),
        'emprunts' => Emprunt::with(['etudiant', 'livre'])
                              ->latest()
                              ->take(5)
                              ->get()
    ]);
    }
}
