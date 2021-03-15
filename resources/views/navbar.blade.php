@extends('layout.welcome')
@section('navbar')
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="width: 100%;" id="navbar">

        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{asset('images/logo/MTN.png')}}" alt=""> Portfolio : Massiré</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarVisiteur" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-white" id="navbarVisiteur">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chemin_sio') }}">SIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chemin_cv') }}">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chemin_listeProjets') }}">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Stage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chemin_afficherVeille') }}">Veille</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chemin_afficherContact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">À propos de moi</a>
                    </li>
                    @if(!is_array(session('membre')))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('chemin_connexion') }}">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('chemin_inscription') }}">Inscription</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ session('membre')['login']}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('chemin_deconnexion')}}">Déconnexion</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

@endsection
