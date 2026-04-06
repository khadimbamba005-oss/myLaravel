@extends('layout.template')
@section('contenu')
<div class="container">
    <h2>Formulaire d'enr&#233gistrement des emprunts</h2>
<form action="{{route('emprunt.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <select name="livre_id" id="">
            @foreach($livres as $item)
            <option value="{{$item->id}}">
                {{$item->titre}}
            </option>
            @endforeach
        </select>
        <select name="etudiant_id" id="">
            @foreach($etudiants as $item)
            <option value="{{$item->id}}">
                {{$item->prenom}} {{$item->nom}}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="date_emprunt">Date d'emprunt</label>
        <input type="date" class="form-control" name="date_emprunt" id="" value="">
    </div>
    <div class="form-group">
        <label for="num_ref">Date de retour</label>
        <input type="text" class="form-control" name="date_retour" id="date_retour" value="">
         @error('date_retour')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="rendu"></label>
        <input type="checbox" class="form-control" name="rendu" value="1" id="rendu" >
    </div>
    <button type="submit" class="btn btn-success">+Enregistrer</button>
    <a href="{{route('emprunt.index')}}" class="btn btn-danger">
       Annuler
    </a>
</form>
</div>
@endsection
