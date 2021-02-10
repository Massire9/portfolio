@extends('navbarAdmin')
@section('contenu1')
    <div class="table">
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
                <th scope="col" style=" width: 15%">Modifier</th>
                <th scope="col" style=" width: 15%">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lesFormations as $uneFormation)
            <tr>
                <td>{{$uneFormation['annee']}}</td>
                <td>{{$uneFormation['diplome']}}</td>
                <td>{{$uneFormation['filiere']}}</td>
                <td>{{$uneFormation['ville']}}</td>
                <td><a href="{{route('chemin_majScolarite', ['id' => $uneFormation['id']])}}"><img src="{{asset('images/utils/edit.png')}}" width="15%" alt=""></a></td>
                <td><a href=""><img src="{{asset('images/utils/delete.png')}}" width="15%" alt=""></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <small><a href="href="{{ route('chemin_ajtScolarite') }}">Ajouter une formation</a></small>
    </div>
    <div class="table">
        <table class="table table-striped table-condensed" id ="experience">
            <thead>
            <tr>
                <th colspan="5"> Experiences</th>
            </tr>
            <tr>
                <th scope="col" style=" width: 10%">Nom</th>
                <th scope="col" style=" width: 7%">Date</th>
                <th scope="col" style=" width: 55%">Description</th>
                <th scope="col" style=" width: 15%">Modifier</th>
                <th scope="col" style=" width: 15%">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lesExperiences as $uneExperience)
            <tr>
                    <td>{{$uneExperience['nom']}}</td>
                    <td>{{$uneExperience['date']}}</td>
                    <td>{{$uneExperience['description']}}</td>
                    <td><a href="{{ route('chemin_majExperience', ['id' => $uneExperience['id']] ) }}"><img src="{{asset('images/utils/edit.png')}}"width="15%" alt=""></a></td>
                    <td><a href=""><img src="{{asset('images/utils/delete.png')}}" width="15%" alt=""></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <small><a href="{{ route('chemin_ajtExperience') }}">Ajouter une expérience</a></small>
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
                <th scope="col" style=" width: 15%">Modifier</th>
                <th scope="col" style=" width: 15%">Supprimer</th>
            </tr>
            </thead>
            <tbody>
                @foreach($lesCompetences as $uneCompetence)
                    <tr>
                        <td>{{$uneCompetence['nom']}}</td>
                        <td>{{$uneCompetence['description']}}</td>
                        <td><a href="{{route('chemin_majCompetence', ['id' => $uneCompetence['id']])}}"><img src="{{asset('images/utils/edit.png')}}"width="15%" alt=""></a></td>
                        <td><a href=""><img src="{{asset('images/utils/delete.png')}}" width="15%" alt=""></a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <small><a href="{{route('chemin_ajtCompetence')}}">Ajouter une competence</a></small>
    </div>
@endsection
