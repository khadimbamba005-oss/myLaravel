@extends('layout.template')
@section('contenu')
<div class="container">
    <h2>Formulaire de création de livre</h2>
<form action="{{route('livre.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" class="form-control" required value="{{old('titre')}}">
    </div>
    <div class="form-group">
        <label for="auteur">Auteur</label>
        <input type="text" class="form-control" name="auteur" id="auteur" value="{{old('auteur')}}">
    </div>
    <div class="form-group">
        <label for="annee_pub">Année de publication</label>
        <input type="text" class="form-control" name="annee_pub" id="annee_pub" value="{{old('annee_pub')}}">
    </div>
    <div class="form-group">
        <label for="num_ref">Numéro de référence</label>
        <input type="text" class="form-control" name="num_ref" id="num_ref" value="{{old('annee_ref')}}">
         @error('num_ref')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="quantite">Quantité</label>
        <input type="text" class="form-control" name="quantite" id="quantite" value="{{old('quantite')}}">
    </div>
    <button type="submit" class="btn btn-success">+ Ajouter</button>
    <a href="{{route('livre.liste')}}" class="btn btn-danger">
       Annuler
    </a>
</form>
</div>
@endsection
