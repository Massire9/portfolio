@extends('navbarAdmin')
@section('contenu1')
    <form action="{{route('chemin_validerMajScolarite')}}">
    <table class="table table-striped table-condensed" id ="scolarite">
        <thead>
        <tr>
            <th colspan="6"> Scolarité</th>
        </tr>
        <tr>
            <th scope="col" style=" width: 2%">Date</th>
            <th scope="col" style=" width: 15%">Diplome</th>
            <th scope="col" style=" width: 25%">Filière</th>
            <th scope="col" style=" width: 20%">Ville</th>
            <th scope="col" style=" width: 20%">Ordre d'affichage</th>
            <th scope="col" style=" width: 20%">Valider</th>
        </tr>
        </thead>
        <tbody>
        <tr>
                <td>{{$uneFormation['annee']}}</td>
                <td>{{$uneFormation['diplome']}}</td>
                <td>{{$uneFormation['filiere']}}</td>
                <td>{{$uneFormation['ville']}}</td>
                <td>{{$uneFormation['ordre']}}</td>
                <td></td>
        </tr>
        <tr>
            <input type="hidden" value="{{ $uneFormation['id'] }}" name="id" required>
            <td><input type="text" name="annee" required></td>
            <td><input type="text" name="diplome" style=" width: 100%" required></td>
            <td><input type="text" name="filiere" style=" width: 100%" required></td>
            <td><input type="text" name="ville" style=" width: 100%" required></td>
            <td><input type="text" name="ordre" style=" width: 100%" required></td>
            <td><input class="btn btn-dark" type="submit" value="Valider"></td>
        </tr>
        </tbody>
    </table>
    </form>
@endsection
