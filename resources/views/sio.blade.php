@extends('navbar')
@section('contenu1')
    <br>

    <h1 class="text-center">BTS SIO, c'est quoi ?</h1>
    <div class="card shadow" style="width: 50%" id="sio">
        <div class="card-body">
            <p class="card-text text-center">
                Le BTS SIO - Services Informatiques aux Organisations se prépare en deux ans après un bac général, un
                bac STMG ou un bac pro du domaine.
                <br>Il propose 2 options : <br><span id="listeOptionSISR">- SISR (Solutions d'Infrastructures Systèmes et Réseaux) <br></span>
                <span id="listeOptionSLAM">- SLAM (Solutions Logicielles et Applications Métiers).</span>
                <br>C'est un diplôme de niveau bac +2 qui se prépare en formation initiale mais aussi en alternance dans
                des établissements publics et privés.
            </p>
        </div>
    </div>

    <img src="https://i.ibb.co/MDTX18x/svg-1.png" width="100%" alt="">
    <div class="text-center" id="optionSIO">
        <h3 style="font-size: 45px">Les options</h3><br>
        <div class="container">
            <div class="row justify-content-around">
                <div class="card col-md-4 mb-3" style="width: 25rem" id="sisr">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color:rebeccapurple; font-size: 27px">Option : SISR <br> Solutions d’infrastructure, systèmes et
                            réseaux</h5>
                        <p class="card-text text-center">La spécialisation SISR du BTS SIO permet d’apprendre un métier
                            qui
                            consiste à installer,
                            configurer et gérer les équipements et les réseaux informatiques.
                            Cela signifie intervenir sur la conception, la mise en place,
                            le déploiement et la maintenance de programmes destinés à la gestion au sein d’une
                            organisation.</p>
                    </div>
                </div>
                <div class="card col-md-4" style="width: 25rem" id="slam">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color: darkorange; font-size: 27px">Option : SLAM <br> Solutions Logicielles et Applications
                            Métier
                        </h5>
                        <p class="card-text text-center">La spécialisation SLAM du BTS SIO est elle plus orientée
                            développement.
                            Elle permet d'apprendre à réaliser des logiciels, sites webs, applications mobiles, mais
                            aussi
                            de rédiger des documentations techniques liées à celles-ci.
                            De plus, elle permet d'apprendre à former des utilisateurs pour gérer la maintenance des
                            applications.</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

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

    {{--
    <div class="text-center">
        <h4>BTS : SIO</h4>
        <p>Le BTS SIO - Services informatiques aux organisations se prépare en deux ans après un bac général, un bac STMG ou un bac pro du domaine.
            <br>
            Il propose 2 options : SISR (Solutions d'Infrastructures Systèmes et Réseaux), SLAM (Solutions Logicielles et Applications Métiers.
            <br>
            C'est un diplôme de niveau bac +2 qui se prépare en formation initiale mais aussi en alternance dans des établissements publics et privés.</p>
    </div>
        <br>
        <div class="card-deck">
            <div class="card bg-danger shadow" style="width: 18rem" id="sisr">
                <div class="card-body">
                    <h5 class="card-title">Option : SISR <br> Solutions d’infrastructure, systèmes et réseaux </h5>
                    <p class="card-text">La spécialisation SISR du BTS SIO permet d’apprendre un métier qui consiste à installer,
                        configurer et gérer les équipements et les réseaux informatiques. <br>
                        Cela signifie intervenir sur la conception, la mise en place,
                        le déploiement et la maintenance de programmes destinés à la gestion au sein d’une organisation.</p>
                </div>
            </div>
            <div class="card bg-info shadow" style="width: 18rem" id="slam">
                <div class="card-body">
                    <h5 class="card-title">Option : SLAM <br> Solutions Logicielles et Applications Métier</h5>
                    <p class="card-text">La spécialisation SLAM du BTS SIO est elle plus orientée développement.
                        Elle permet d'apprendre à réaliser des logiciels, sites webs, applications mobiles, mais aussi de rédiger des documentations techniques liées à celles-ci.
                        <br>
                        De plus, elle permet d'apprendre à former des utilisateurs pour gérer la maintenance des applications.</p>
                </div>
            </div>
        </div>
    --}}

@endsection
