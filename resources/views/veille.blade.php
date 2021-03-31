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
    </div>
    <img src="https://i.ibb.co/njrmZxR/sgv.png" width="100%" alt="">
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
@extends('pied')
