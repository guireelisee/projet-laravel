@extends('layouts.master')

@section('main')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oups!</strong> Il y a un problème.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel" style="font-weight: bold">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Enregistrement d'une demande</h5>
            <form action="{{ route('fiche.update', $fiche->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="position-relative row form-group">
                     @php
                    date_default_timezone_set("Africa/Abidjan");
                    $date = date("Y-m-d", time());
                    @endphp
                    <label class="col-sm-2 col-form-label">Date d'arrivée</label>
                    <div class="col-sm-10">
                        <input name="date_arrivee" placeholder="" type="text" class="form-control" value="{{$fiche->date_arrivee}}" max="@php echo $date @endphp" readonly>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label class="col-sm-2 col-form-label">Nom de l'expéditeur</label>
                    <div class="col-sm-10">
                        <input name="nom_exp" placeholder="" type="text" class="form-control" value="{{$fiche->nom_exp}}" readonly>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label class="col-sm-2 col-form-label">Prénom(s) de l'expéditeur</label>
                    <div class="col-sm-10">
                        <input name="prenom_exp" placeholder="" type="text" class="form-control" value="{{$fiche->prenom_exp}}" readonly>
                    </div>
                </div>
                    <div class="position-relative row form-group">
                    <label for="exampleSelect" class="col-sm-2 col-form-label">Instructions du SP</label>
                    <div class="col-sm-10">
                        <select name="sp_instructions" class="form-control" name="sp_instructions">
                            <option value="Pour avis du Directeur">Pour avis du Directeur</option>
                            <option value="Pour décision du Directeur" selected>Pour décision du Directeur</option>
                            <option value="Pour l'interessé">Pour l'interessé</option>
                            <option value="Pour Information">Pour Information</option>
                        </select>
                    </div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <a name="" id="" class="btn btn-danger" href="{{ route('fiche.index') }}" role="button">Retour</a>
                        <button class="btn btn-success" type="submit">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
