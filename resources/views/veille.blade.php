@extends('navbar')
@section('contenu1')
    <div>
        <h1 class="text-center">Veille Technologique</h1><br><br>
    </div>
    <div class="card shadow " style="width: 50%" id="descVeille">
        <div class="card-body">
            <h5 class="card-title text-center">Qu'est-ce qu'est la veille technologique ?</h5>
            <p class="card-text text-center">La veille technologique ou veille scientifique et technique consiste à
                s'informer de façon systématique
                sur les techniques les plus récentes et surtout sur leur mise à disposition commerciale.
                Faire une veille est très important car il faut être à l'affût des dernières nouveautées, l'informatique
                étant un domaine qui évolue sans cesse.</p>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="card shadow" style="width: 50%" id="maVeille">
        <div class="card-body">
            <h3 class="card-title text-center">Ma veille technologique</h3>
            <p class="card-text text-center">Le thème de ma veille est : <span
                    id="theme"> La sécurité informatique</span>.<br>
                J'ai utilisé deux outils qui sont : <br>
                <span id="listeOutil">
                - Les flux RSS avec le Monde de l'informatique et 01Net en source<br>
                - Google Actuality <br>
            </span>
            </p>
        </div>
    </div><br>
    <img src="https://i.ibb.co/MDTX18x/svg-1.png" width="100%" alt="">
    <div id="fluxrss">
        <h2 class="text-center" id="titreVeille">Le Flux RSS</h2>
        <div class="container">
            <div class="row justify-content-around" id="clip-board">
                @for($i = 0; $i < 3; $i++)
                    <div class="card col-xl-3 shadow" style="width: 20rem;"
                         id="cardVeille">
                        <a href="http://www.lemondeinformatique.fr" target="_blank"><img class="card-img-top"
                                                                                         src="https://clubutilisateursoracle.org/wp-content/uploads/2019/04/LeMondeInformatique-logo.png"
                                                                                         width="286px" height="180px"
                                                                                         alt="Le Monde de l'informatique"></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{$liens[$i]}}" target="_blank">{{$titres[$i]}}</a></h5>
                            <p class="card-text">{{$contenus[$i]}}</p>
                            <p class="card-text"><small class="text-muted">écrit le : <i>{{$dates[$i]}}</i> </small></p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <br><br>
    </div>
    <svg height="100%" width="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg"
         class="transition duration-300 ease-in-out delay-150">
        <defs>
            <linearGradient id="gradient">
                <stop offset="5%" stop-color="#9900efff"></stop>
                <stop offset="95%" stop-color="#ff6900ff"></stop>
            </linearGradient>
        </defs>
        <path
            d="M 0,400 C 0,400 0,200 0,200 C 93.14832535885168,204.47846889952154 186.29665071770336,208.95693779904306 277,219 C 367.70334928229664,229.04306220095694 455.9617224880383,244.6507177033493 551,255 C 646.0382775119617,265.3492822966507 747.8564593301435,270.4401913875598 857,248 C 966.1435406698565,225.5598086124402 1082.6124401913878,175.5885167464115 1181,163 C 1279.3875598086122,150.4114832535885 1359.6937799043062,175.20574162679424 1440,200 C 1440,200 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="url(#gradient)"
            class="transition-all duration-300 ease-in-out delay-150" transform="rotate(-180 720 200)"></path>
    </svg>
    <div class="card shadow" style="width: 40%;" id="googleActu">
        <div class="card-body">
            <h3 class="card-title text-center">Google Actuality</h3>
            <p class="card-text text-center">Google Actuality est une application mobilepermet d'avoir une timeline des
                dernières
                actualités
                sur un thème choisi.</p>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row justify-content-around">
            <div class="mb-3 col-6 col-sm-3 col-md-2 d-lg-inline-block">
                <a href="https://i.ibb.co/F41753n/image0.jpg" target="_blank"><img
                        src="https://i.ibb.co/F41753n/image0.jpg" width="100%"
                        height="100%" alt=""></a>
            </div>
            <div class="mb-3 col-6 col-sm-3 col-md-2 d-lg-inline-block">
                <a href="https://i.ibb.co/MpJtdCv/image0-1.jpg" target="_blank"><img
                        src="https://i.ibb.co/MpJtdCv/image0-1.jpg" width="100%"
                        height="100%" alt=""></a>
            </div>
        </div>
    </div>
@endsection
