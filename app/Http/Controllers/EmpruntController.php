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
                'livre_id' => 'required|exists:livres,id',
                'etudiant_id' => 'required|exists:etudiants,id',
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

        Emprunt::create($valide);
        return redirect()->route('emprunt.index')->with('Succes', 'Emprunt enregistre avec succ&#233s !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Emprunt $emprunt)
    {
        return view('emprunts.show', compact('emprunt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emprunt $emprunt)
    {
        $livres = Livre::all();
        $etudiants = Etudiant::all();
        return view('emprunts.edit',compact('emprunt','livres','etudiants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emprunt $emprunt)
    {
        $emprunt->update($request->all());
        return redirect()->route('emprunt.index')->with('Succes' , 'Les informations de l\'emprunt ont ete modifiees avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emprunt $emprunt)
    {
        $emprunt->delete();
        return view('emprunts.index');
    }
}
