@extends('navbar')
@section('contenu1')
    <br>
    <div class="text-center">
        <h3>Mes projets</h3>
        <p>Voici les projets que j'ai réalisé</p>

    </div>
    <div class="container">
        <div class="row justify-content-around">
            @foreach($lesProjets as $i => $unProjet)
                <div class="col-sm-4 mb-3" >
                    <div class="card" style="max-height: 100%" id="{{ ($i %2 == 0) ? "cardProjetPair" : "cardProjetImpair"}}">
                        @php
                            $lesImages = explode(";", $unProjet['photo']);
                        @endphp
                        <div id="cartePhoto" class="carousel slide h-100" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($lesImages as $k => $img)
                                    <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                        <a data-toggle="modal" href="" data-target="#img{{$unProjet['id']}}"><img
                                                data-toggle="modal" href="" data-target="{{$unProjet['id']}}"
                                                width="100%" height="180px" src="{{ $img }}"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $unProjet['nom'] }}</h5>
                            <p class="card-text">@php echo substr(nl2br($unProjet['description']), 0, 110) @endphp... <a data-toggle="modal" data-target="#desc{{$unProjet['id']}}" href="">Lire la suite...</a></p>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="img{{ $unProjet['id'] }}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$unProjet['nom']}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="modalCarousel{{ $unProjet['id'] }}" class="carousel slide"
                                     data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($lesImages as $k => $img)
                                            <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                                <img width="100%" src="{{ $img }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#modalCarousel{{ $unProjet['id'] }}"
                                       role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#modalCarousel{{ $unProjet['id'] }}"
                                       role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                @foreach($lesImages as $key => $uneImage)
                                    <a role="button" class="btn btn-outline-info" href="{{$uneImage}}" target="_blank">Image {{$key}}</a>
                                @endforeach
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="desc{{$unProjet['id']}}" tabindex="-1" role="dialog" aria-labelledby="desc{{$unProjet['nom']}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $unProjet['nom'] }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>@php echo nl2br($unProjet['description']) @endphp</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@extends('pied')

