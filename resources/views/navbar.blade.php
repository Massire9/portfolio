@extends('layout.welcome')
    @section('navbar')

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center ">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="">Accueil</a>
                </li>
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
                    <a class="nav-link" href="">Veille</a>
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
        </nav>
    @endsection
