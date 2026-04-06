<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Livre;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Carbon\Carbon;
class EmpruntController extends Controller
{

    public function index()
    {
        $emprunts = Emprunt::all();
        return view('emprunts.index', compact('emprunts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livres = Livre::all();
        $etudiants = Etudiant::all();
        return view('emprunts.create' , compact('livres' , 'etudiants'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valide = $request->validate(
            [
                'livre_id' => 'required|exists:livre,id',
                'etudiant_id' => 'required|exists:etudiant,id',
                'date_emprunt' => 'required|date',
                'date_retour' => 'required|date',
                'rendu' => 'required|boolean'
            ]
        );


        $dateDebut = Carbon::parse($request->date_emprunt);
        $dateFin = Carbon::parse($request->date_retour);
        $duree = $dateDebut->diffInDays($dateFin);

        if($duree > 7)
            {
                return back()->withErrors([
                'date_retour' => 'La duree d\'emprunt ne doit pas depasser 7 jours'
                ]);
            }

        Emprunt::create($validate);
        return redirect()->route('emprunts.index')->with('Succes', 'Emprunt enregistre avec succ&#233s !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Emprunt $emprunt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emprunt $emprunt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emprunt $emprunt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emprunt $emprunt)
    {
        //
    }
}
