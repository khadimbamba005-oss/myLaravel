@extends('layout.template')
@section('contenu')
<table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Liste des étudiants</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Numéro étudiant</th>
                    <th class="hidden-user"><i class="fa fa-question-circle"></i>Nom</th>
                    <th><i class="fa fa-bookmark"></i>Prénom</th>
                    <th><i class=" fa fa-edit"></i>Numéro de télephone</th>
                    <th><i class=" fa fa-edit"></i>Adresse email</th>
                  </tr>
                </thead>
        <tbody>
    @forelse ($etudiants as $item )
        <tr>
            <td>
              {{$item->numEtudiant}}
            </td>
            <td >{{$item->nom}}</td>
            <td >{{$item->prenom}}</td>
            <td>{{$item->numTel}}</td>
            <td>{{$item->email}}</td>
            <td><a href="{{route('etudiant.show')}}"class="btn btn-success btn-xs"><i class="fa fa-check"></i></a></td>
            <td><a href="" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></td>
            <td><a href="" class="btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>
        </tr>
    @empty
        <p>Il n'y a aucun à afficher</p>
    @endforelse
        </tbody>
    </table>
    {{$etudiants->links()}}
@endsection
