@extends('layout.template')
@section('contenu')
<h1>Informations de l'&#233tudiant</h1>
<div class="col-md-3">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body">
                <p>Num&#233ro &#233tudiant {{$etudiant->numEtudiant}}</p>
            </div>
            <div class="card-body">
                <p>Nom: {{$etudiant->nom}}</p>
            </div>
            <div class="card-body">
                <p>Pr&#233nom: {{$etudiant->prenom}}</p>
            </div>
            <div class="card-body">
                <p>Num&#233ro de t&#233l&#233phone: {{$etudiant->numTel}}</p>
            </div>
            <div class="card-body">
                <p>Adresse: {{$etudiant->email}}</p>
            </div>
        </div>
        <a href="{{route('livre.liste')}}" class="btn btn-info">Retour</a>
    </div>
@endsection
