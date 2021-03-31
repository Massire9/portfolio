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
                                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en
                                page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis
                                les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour
                                réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq
                                siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu
                                n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles
                                Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion
                                dans des applications de mise en page de texte, comme Aldus PageMaker.
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
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en
                            page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis
                            les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour
                            réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq
                            siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu
                            n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles
                            Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion
                            dans des applications de mise en page de texte, comme Aldus PageMaker.
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
