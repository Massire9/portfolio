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
                <div class="card col-md-4" style="width: 25rem" id="sisr">
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
    <img src="https://i.ibb.co/njrmZxR/sgv.png" width="100%" alt="">


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
@extends('pied')
