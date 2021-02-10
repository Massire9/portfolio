@extends('navbar')
@section('contenu1')
    <div class="table">
        <table class="table table-striped table-condensed" id ="scolarite">
            <thead>
            <tr>
                <th colspan="4"> Scolarité</th>
            </tr>
            <tr>
                <th scope="col" style=" width: 10%">Date</th>
                <th scope="col" style=" width: 20%">Diplome</th>
                <th scope="col" style=" width: 45%">Filière</th>
                <th scope="col" style=" width: 45%">Ville</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($lesFormations as $uneFormation)
                    <td>{{$uneFormation['annee']}}</td>
                    <td>{{$uneFormation['diplome']}}</td>
                    <td>{{$uneFormation['filiere']}}</td>
                    <td>{{$uneFormation['ville']}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
    <div class="table">
        <table class="table table-striped table-condensed" id ="experience">
            <thead>
            <tr>
                <th colspan="4"> Experiences</th>
            </tr>
            <tr>
                <th scope="col" style=" width: 10%">Nom</th>
                <th scope="col" style=" width: 5%">Date</th>
                <th scope="col" style=" width: 45%">Description</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($lesExperiences as $uneCompetence)
                    <td>{{$uneCompetence['nom']}}</td>
                    <td>{{$uneCompetence['date']}}</td>
                    <td>{{$uneCompetence['description']}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
    <div class="table">
        <table class="table table-striped table-condensed" id ="competences">
            <thead>
            <tr>
                <th colspan="4"> Competences</th>
            </tr>
            <tr>
                <th scope="col" style=" width: 10%">Nom</th>
                <th scope="col" style=" width: 45%">Description</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($lesCompetences as $uneCompetence)
                    <td>{{$uneCompetence['nom']}}</td>
                    <td>{{$uneCompetence['description']}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
@endsection
