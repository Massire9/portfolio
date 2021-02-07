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
                    <a class="nav-link" href="#">CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Stage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Veille</a>
                </li>
            </ul>
        </nav>
    @endsection
