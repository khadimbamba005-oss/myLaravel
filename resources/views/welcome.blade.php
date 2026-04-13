@extends('layout.template')
@section('contenu')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb">
        <div class="panel pn" style="background:#36b9cc; color:white;padding:20px;border-radius:10px;">
            <div class="row">
                <div class="col-xs-6">
                    <h5>
                        Etudiants
                    </h5>
                    <h2>{{ $nbEtudiants }}</h2>
                </div>
                <div class="col-xs-6 text-right">
                    <i class="fa fa-users fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 mb">
        <div class="panel pn" style="background:#4e73df; color: white; padding:20px; border-radius:10px;">
            <div class="row">
                <div class="col-xs-6">
                    <h5>
                        Livres
                    </h5>
                    <h2>{{ $nbLivres}}</h2>
                </div>
                <div class="col-xs-6 text-right">
                    <i class="fa fa-book fa-3x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 mb">
        <div class="panel pn" style="background:#1cc88a; color:white;padding:20px;border-radius:10px;">
            <div class="row">
                <div class="col-xs-6">
                    <h5>Emprunts</h5>
                    <h2>{{ $nbEmprunts }}</h2>
                </div>
                <div class="col-xs-6 text-right">
                    <i class="fa fa-exchange fa-3x">

                    </i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 mb">
        <div class="panel pn" style="background:#e7ab3b; color:white;padding:20px;border-radius:10px">
            <div class="row">
                <div class="col-xs-6">
                    <h5>Retards</h5>
                    <h2>{{ $nbRetards }}</h2>
                </div>
                <div class="col-xs-6 text-right">
                    <i class="fa fa-warning"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="content-panel" style="padding:20px;">
            <h4><i class="fa fa-angle-right">
                </i>Derniers emprunts</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th><i class="fa fa-book">
                                    </i>Livre</th>
                                <th><i class="fa fa-user">
                                    </i>Etudiant</th>
                                <th><i class="fa fa-calendar"></i>Date</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emprunts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->etudiant_id }}</td>
                                <td>{{ $item->date_emprunt }}</td>
                                <td>
                                @if($item->rendu)
                                    <span class="label label-success">Rendu</span>
                                @else
                                    <span class="label label-warning">En cours</span>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
