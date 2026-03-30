<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::paginate(1);
        return view('etudiants.index', compact('etudiants')) ;
    }
}
