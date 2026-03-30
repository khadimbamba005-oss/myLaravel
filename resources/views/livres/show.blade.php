@extends('layout.template');
@section('contenu')
<h1>Informations du livre</h1>
<div class="col-md-3">
        <div class="card shadow-sm border-0 text-center">
            <div class="card-body">
                <p>Titre: {{$livre->titre}}</p>
            </div>
            <div class="card-body">
                <p>Auteur: {{$livre->auteur}}</p>
            </div>
            <div class="card-body">
                <p>Ann&#233e de publication: {{$livre->annee_pub}}</p>
            </div>
            <div class="card-body">
                <p>Num&#233ro de r&#233f&#233rence: {{$livre->num_ref}}</p>
            </div>
            <div class="card-body">
                <p>Quantit&#233: {{$livre->quantite}}</p>
            </div>
        </div>
        <a href="{{route('livre.liste')}}" class="btn btn-info">Retour</a>
    </div>
@endsection
