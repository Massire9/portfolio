@extends('navbarAdmin')
@section('contenu1')
    <form action="{{route('chemin_validerAjtCompetence')}}">
        <table class="table table-striped table-condensed" id ="scolarite">
            <thead>
            <tr>
                <th colspan="6">Ajouter une compétence</th>
            </tr>
            <tr>
                <th scope="col" style=" width: 2%">Nom</th>
                <th scope="col" style=" width: 15%">Description</th>
                <th scope="col" style=" width: 20%">Ordre d'affichage</th>
                <th scope="col" style=" width: 20%">Valider</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="nom" required></td>
                <td><input type="text" name="description" style=" width: 100%" required></td>
                <td><input type="text" name="ordre" style=" width: 100%" required></td>
                <td><input class="btn btn-dark" type="submit" value="Valider"></td>
            </tr>
            </tbody>
        </table>
    </form>
@endsection
