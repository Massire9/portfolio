@extends('navbarAdmin')
@section('contenu1')
<form action="{{route('chemin_validerMajExperience')}}">
    <table class="table table-striped table-condensed" id ="scolarite">
        <thead>
        <tr>
            <th colspan="6"> Experience</th>
        </tr>
        <tr>
            <th scope="col" style=" width: 2%">Nom</th>
            <th scope="col" style=" width: 2.5%">Date</th>
            <th scope="col" style=" width: 15%">Description</th>
            <th scope="col" style=" width: 20%">Ordre d'affichage</th>
            <th scope="col" style=" width: 20%">Valider</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$uneExperience['nom']}}</td>
            <td>{{$uneExperience['date']}}</td>
            <td>{{$uneExperience['description']}}</td>
            <td>{{$uneExperience['ordre']}}</td>
            <td>Valider</td>
        </tr>
        <tr>
            <input type="hidden" value="{{ $uneExperience['id'] }}" name="id" required>
            <td><input type="text" name="nom" required></td>
            <td><input type="text" name="date" id="date"></td>
            <td><input type="text" name="description" style=" width: 100%" required></td>
            <td><input type="text" name="ordre" style=" width: 100%" required></td>
            <td><input class="btn btn-dark" type="submit" value="Valider"></td>
        </tr>
        </tbody>
    </table>
</form>
@endsection
