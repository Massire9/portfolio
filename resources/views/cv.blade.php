@extends('navbar')
@section('contenu1')
    <div class="table-responsive-xl">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Diplome</th>
                    <th scope="col">Filiere</th>
                    <th scope="col">Ville</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lesFormations as $key => $uneFormation)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$uneFormation['annee']}}</td>
                    <td>{{$uneFormation['diplome']}}</td>
                    <td>{{$uneFormation['filiere']}}</td>
                    <td>{{$uneFormation['ville']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="6%">#</th>
                    <th scope="col" width="31%">Nom</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lesExperiences as $key => $uneExperience)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$uneExperience['nom']}}</td>
                    <td>{{$uneExperience['description']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="table-responsive">
        <table class="table" id="competences">
            <thead>
            <tr>
                <th scope="col" width="6%">#</th>
                <th scope="col" width="31%">Nom</th>
                <th scope="col">Description</th>

            </tr>
            </thead>
            <tbody>
            @foreach($lesCompetences as $key => $uneCompetence)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$uneCompetence['nom']}}</td>
                    <td>{{$uneCompetence['description']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
