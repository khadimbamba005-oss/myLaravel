<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::paginate(1);
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("OK");
        $valid = $request->validate([
            'numEtudiant'=>'string|max:3|unique:etudiants,numEtudiant|required',
            'nom'=>'string|max:20|required',
            'prenom'=>'string|max:30|required',
            'numTel'=>'string|max:9|required',
            'email'=>'string|max:30|required'
        ],
        [
        'numEtudiant.unique'=>'Invalide'
        ]);
        Etudiant::create($valid);
        return redirect()->route('etudiant.index')->with('Reussi', 'Etudiant ajoute avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
