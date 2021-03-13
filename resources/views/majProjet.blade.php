@extends('navbarAdmin')
@section('contenu1')
    <form action="{{route('chemin_validerAjtProjet')}}">
        <table enctype="multipart/form-data" class="table table-striped table-condensed" id ="projet">
            <thead>
            <tr>
                <th colspan="6"> Experience</th>
            </tr>
            <tr>
                <th scope="col" style=" width: 2%">Nom</th>
                <th scope="col" style=" width: 2.5%">Images</th>
                <th scope="col" style=" width: 15%">Description</th>
                <th scope="col" style=" width: 20%">Valider</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="nom" required></td>
                <input name="images" type="file" />
                <td><input type="text" name="date" id="date"></td>
                <td><input type="text" name="description" style=" width: 100%" required></td>
                <td><input class="btn btn-dark" type="submit" value="Valider"></td>
            </tr>
            </tbody>
        </table>
    </form>
@endsection
