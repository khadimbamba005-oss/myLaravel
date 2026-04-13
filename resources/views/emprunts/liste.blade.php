@extends('layout.template')
@section('contenu')
<table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Liste des étudiants</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Identifiant du livre</th>
                    <th class="hidden-user"><i class="fa fa-question-circle"></i>Identifiant de l'etudiant</th>
                    <th><i class="fa fa-bookmark">Date d'emprunt</i></th>
                    <th><i class=" fa fa-edit"></i>Date de retour</th>
                    <th><i class=" fa fa-edit"></i>Rendu</th>
                  </tr>
                </thead>
        <tbody>
    @forelse ($emprunts as $item )
        <tr>
            <td>
              {{$item->livre_id}}
            </td>
            <td >{{$item->etudiant_id}}</td>
            <td >{{$item->date_emprunt}}</td>
            <td>{{$item->date_retour}}</td>
            <td>{{$item->rendu}}</td>
        </tr>
    @empty
        <p>Il n'y a aucun emprunt à afficher</p>
    @endforelse
        </tbody>
    </table>


@endsection
