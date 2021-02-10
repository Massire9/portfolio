@extends('layout.welcome')
@section('navbarAdmin')

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center ">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('chemin_editerCV') }}">Editer CV</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Membres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ session('membre')['login']}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('chemin_deconnexion')}}">Déconnexion</a>
            </li>
        </ul>
    </nav>
@endsection
