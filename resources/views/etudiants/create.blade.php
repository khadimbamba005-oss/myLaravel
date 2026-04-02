@extends('layout.template')
@section('contenu')
<div class="container">
    <h2>Formualaire d'ajout d'&#233tudiant</h2>
<form action="{{route('etudiant.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="numEtudiant">Numero de l'&#233tudiant</label><input type="text" class="form-control" name="numEtudiant">
    </div >
    <div class="form-group">
        <label for="nom">Nom</label><input type="text" class="form-control" name="nom">
    </div>
    <div class="form-group"><label for="prenom">Prenom</label><input type="text" class="form-control"  name="prenom"></div>
    <div class="form-group"><label for="numTel">Numero de telephone</label><input type="text" class="form-control"  name="numTel"></div>
    <div class="form-group"><label for="email" >Email</label><input type="email" class="form-control"  name="email" ></div>
    <button type="submit" class="btn btn-success" >+Ajouter</button>
    <a href="{{route('etudiant.index')}}" class="btn btn-danger">Annuler</a>
</form>
</div>
@endsection
