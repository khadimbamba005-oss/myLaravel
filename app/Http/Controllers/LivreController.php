<?php

namespace App\Http\Controllers;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::paginate(10);
        return view('livres.index' , compact('livres'));
    }
    public function create()
    {
        return view('livres.create');
    }
    public function store(Request $request){
        $validForm = $request->validate([
            'titre'=>'string|max:255|required',
            'auteur'=>'string|max:255|required',
            'annee_pub'=>'string|max:10|required',
            'num_ref'=>'string|max:10|required|unique:livres,num_ref',
            'quantite'=>'numeric|min:0|required',
        ],
        ['num_ref.unique'=>'Veuillez changer le numero de reference du livre cela existe deja']
        );
        // dd($request->all());
        Livre::create($validForm);
        return redirect()->route('livre.liste')->with('reussi' , 'Livre ajouté avec succès!!');

    }
    public function show(Livre $livre){
        // $livre = Livre::find($id);
        // dd($livre);
        return view('livres.show', compact('livre'));
    }

    // fonctions pour modifier
    public function edit(Livre $livre)
    {

        return view('livres.edit', compact('livre'));
    }
    public function update(Livre $livre , Request $req)
    {
        // dd($req->all())
        $livre->update($req->all());
        return redirect()->route('livre.liste');
    }
    public function delete(Livre $livre)
    {
        $livre->delete();
        return redirect()->route('livre.liste');
    }
}
