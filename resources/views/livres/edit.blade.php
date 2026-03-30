@extends('layout.template')
@section('contenu')
<div class="container">
    <h2>Formulaire de modification  de livre</h2>
<form action="{{route('livre.update', $livre->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" class="form-control" required value="{{$livre->titre}}">
    </div>
    <div class="form-group">
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" name="auteur" id="auteur" value="{{$livre->auteur}}">
    </div>
    <div class="form-group">
        <label for="annee_pub">Année de publication</label>
        <input type="text" class="form-control" name="annee_pub" id="annee_pub" value="{{$livre->annee_pub}}">
    </div>
    <div class="form-group">
        <label for="quantite">Quantité</label>
        <input type="text" class="form-control" name="quantite" id="quantite" value="{{$livre->quantite}}">
    </div>
    <button type="submit" class="btn btn-success">+ Modifier</button>
    <a href="{{route('livre.liste')}}" class="btn btn-danger">
       Annuler
    </a>
</form>
</div>
@endsection
