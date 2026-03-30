@extends('layout.template')
@section('contenu')
@if (session('reussi'))
   <div class="alert alert-success">
    {{session('reussi')}}
   </div>
@endif
 <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Liste des livres</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Titre</th>
                    <th class="hidden-user"><i class="fa fa-question-circle"></i>Auteur</th>
                    <th><i class="fa fa-bookmark"></i>Numéro livre</th>
                    <th><i class=" fa fa-edit"></i>Quantités</th>
                  </tr>
                </thead>
        <tbody>
    @forelse ($livres as $item )
        <tr>
            <td>
              <a href="basic_table.html#">{{$item->titre}}</a>
            </td>
            <td class="hidden-phone">{{$item->auteur}}</td>
            <td class="">{{$item->annee_pub}}</td>
            <td>{{$item->annee_ref}}</td>
            <td>{{$item->quantite}}</td>
            <td><a href="{{route('livre.show', $item->id)}}"class="btn btn-success btn-xs"><i class="fa fa-check"></i></a></td>
            <td><a href="{{route('livre.edit', $item->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></td>
            <td>
            <form action="{{route('livre.delete', $item->id)}} " method="POST" onsubmit="return confirm('Etes-vous sûr de vouloir suppimer ce livre ?')">
                @csrf
                @method('DELETE')
                <button class="btn-danger btn-xs" type="submit"><i class="fa fa-trash-o"></i></button>
            </form>
            </td>
        </tr>
    @empty
        <p>Il n'y a aucun à afficher</p>
    @endforelse
        </tbody>
    </table>
    {{$livres->links()}}
@endsection
