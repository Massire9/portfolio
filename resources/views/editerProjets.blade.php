@extends('navbarAdmin')
@section('contenu1')
<div class="table">
    <table class="table table-striped table-condensed" id ="scolarite">
        <thead>
        <tr>
            <th colspan="6">Liste des projets</th>
        </tr>
        <tr>
            <th scope="col" style=" width: 2%">Nom</th>
            <th scope="col" style=" width: 15%">Description</th>
            <th scope="col" style=" width: 15%">Modifier</th>
            <th scope="col" style=" width: 15%">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lesProjets as $unProjet)
        <tr>
            <td style="width: 15%;">{{$unProjet['nom']}}</td>
            <td style="width: 50%">{{$unProjet['description']}}</td>
            <td><a href=""><img src="{{asset('images/utils/edit.png')}}" width="10%" alt=""></a></td>
            <td><a href="" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?')"><img src="{{asset('images/utils/delete.png')}}" width="10%" alt=""></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <small><a href="{{ route('chemin_ajtProjet') }}">Ajouter un projet</a></small>
</div>
@endsection
