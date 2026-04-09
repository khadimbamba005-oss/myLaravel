@extends('layout.template')
@section('contenu')
<h1>Informations de l'&#233tudiant</h1>
<div class="col-md-3">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body">
                <p>Identifiant du livre:{{$emprunt->livre_id}}</p>
            </div>
            <div class="card-body">
                <p>Identifiant de l'&#233tudiant: {{$emprunt->etudiant_id}}</p>
            </div>
            <div class="card-body">
                <p>Date d'emprunt: {{$emprunt->date_emprunt}}</p>
            </div>
            <div class="card-body">
                <p>Date de retour: {{$emprunt->date_retour}}</p>
            </div>
            <div class="card-body">
                <p>Retour {{$emprunt->retour}}</p>
            </div>
        </div>
        <a href="{{route('emprunt.index' ,)}}" class="btn btn-info">Retour</a>
    </div>
@endsection
