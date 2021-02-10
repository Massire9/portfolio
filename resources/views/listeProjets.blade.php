@extends('navbar')
@section('contenu1')
    <br>
    <div class="text-center">
        <h3>Mes projets</h3>
        <p>Voici les projets que j'ai réalisé durant mes deux années de BTS : SIO</p>
    </div>
        <div class="card-deck">

        @foreach($lesProjets as $unProjet)
            @php
            $lesImages = explode(";", $unProjet['photo'])
        @endphp
            <div class="card mb-3 col-6 col-sm-3 col-md-5" style="width: 14rem;">
                <div class="card-img">
                    <div id="carousel_card" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($lesImages as $k => $img)
                            <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                <a data-toggle="modal" data-target="#exampleModalCenter"><img class="card-img-top d-block w-100" style="height: 8rem" src="images/projets/{{ $img }}"></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $unProjet['nom'] }}</h5>
                    <p class="card-text">{{ $unProjet['description'] }}</p>
                </div>
                <a class="btn btn-dark" href="{{$unProjet['lienGithub']}}" role="button">Github</a>
                <br>
            </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

    @endforeach
    </div>
@endsection
