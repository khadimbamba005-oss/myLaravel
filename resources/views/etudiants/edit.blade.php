@extends('layout.template')
@section('contenu')
<div class="container">
    <h2>Formulaire de modification  de livre</h2>
<form action="{{route('etudiant.update', $etudiant->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titre">Prenom</label>
        <input type="text" name="prenom" id="titre" class="form-control" required value="{{$etudiant->prenom}}">
    </div>
    <div class="form-group">
        <label for="auteur">Nom</label>
        <input type="text" class="form-control" name="auteur" id="auteur" value="{{$etudiant->nom}}">
    </div>
    <div class="form-group">
        <label for="annee_pub">Numero de telephone</label>
        <input type="text" class="form-control" name="num_tel" id="annee_pub" value="{{$etudiant->numTel}}">
    </div>
    <div class="form-group">
        <label for="quantite">Adresse email</label>
        <input type="text" class="form-control" name="email" id="quantite" value="{{$etudiant->email}}">
    </div>
    <button type="submit" class="btn btn-success">+ Modifier</button>
    <a href="{{route('etudiant.index')}}" class="btn btn-danger">
       Annuler
    </a>
</form>
</div>
@endsection
