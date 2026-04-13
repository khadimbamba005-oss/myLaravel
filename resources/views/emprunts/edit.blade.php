@extends('layout.template')
@section('contenu')
<div class="container">
    <h2>Formulaire de modification  des informations d'un emprunt</h2>
<form action="{{route('emprunt.update', $emprunt->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <select name="livre_id" id="">
            @foreach($livres as $item)
            <option value="{{$item->id}}">{{$item->titre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select name="etudiant_id" id="">
            @foreach ($etudiants as $item)
                <option value="{{$item->id}}">{{$item->prenom}} {{$item->nom}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="date_emprunt">Date d'emprunt</label>
        <input type="text" class="form-control" name="date_emprunt" id="date_emprunt" value="{{$emprunt->date_emprunt}}">
    </div>
    <div class="form-group">
        <label for="quantite">Date de retour</label>
        <input type="text" class="form-control" name="date_retour" id="quantite" value="{{$emprunt->date_retour}}">
    </div>
    <div class="form-group">
        <label for="quantite">Rendu</label>
        <input type="text" class="form-control" name="rendu" id="rendu" value="{{$emprunt->rendu}}">
    </div>
    <button type="submit" class="btn btn-success">+ Modifier</button>
    <a href="{{route('emprunt.index')}}" class="btn btn-danger">
       Annuler
    </a>
</form>
</div>
@endsection
