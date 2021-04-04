@extends('navbar')
@section('contenu1')
    <br><br>
    <div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-3 text-center">
                    <h3 id="titreInfo"> A propos de moi</h3>
                    <br><br>
                    <div class="card" id="cardInfos">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Je m'appelle Massiré, 19 ans, je suis domicilié à Rosny-sous-Bois.<br>
                                J'ai commencé l'informatique avec un <b style="color: purple">BAC STI2D option SIN</b>, j'ai du donc effectué un projet de 6 mois avec 4 camarades :
                                nous devions réaliser un arroisoir automatique.
                                Je suis actuellement en seconde année de <b style="color: darkorange">BTS SIO option SLAM</b>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 text-center">
                    <img class="img-fluid center rounded shadow" id="pdp"
                         src="https://pbs.twimg.com/profile_images/1372966270166036481/2oW049rb_400x400.jpg" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Après mon BTS SIO ?</h3><br><br>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="card col-md-6 mb-5" id="cardInfosApres" style="width: 25rem">
                    <div class="card-body">
                        <p class="card-text text-center">
                            Mon projet professionnel est de dévenir développeur web.
                            Je voudrais poursuivre mes études jusqu'en BAC +5 dans le développement web en alternance.
                            Je souhaite par le biais de l’apprentissage en l’alternance participer à la construction et au développement de l’entreprise,
                            en grandissant avec elle, en apportant mes compétences, ma motivation et en partageant ma passion de la haute technologie.
                            À terme je souhaiterais vivre à l'étranger (Turquie ou Albanie).
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 mb-3 text-center">
                    <h3>Contact</h3>
                </div>
                <div class="col-md-6 text-center" style="font-size: 20px">
                    <p>✉  : toure.massire@btsvoillaume.fr</p>
                    <p>☎  : 07 68 35 70 05</p>
                </div>
            </div>
        </div>

    </div>
@endsection
@extends('pied')
