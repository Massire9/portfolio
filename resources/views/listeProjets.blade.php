@extends('navbar')
@section('contenu1')
    <br>
    <div class="text-center">
        <h3>Mes projets</h3>
        <p>Voici les projets que j'ai réalisé durant mes deux années de BTS : SIO</p>
    </div>
            <div class="row">
                @foreach($lesProjets as $i => $unProjet)
                    <div class="col-sm-6">
                        <div class="card" id="cardProjet" style="margin-left:20%">
                                @php
                                    $lesImages = explode(";", $unProjet['photo']);
                                @endphp
                                <div id="cartePhoto" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($lesImages as $k => $img)
                                            <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                                <a data-toggle="modal" href="" data-target="#{{$unProjet['nom']}}"><img
                                                        data-toggle="modal" href="" data-target="{{$unProjet['id']}}"
                                                        width="100%" src="{{ $img }}"></a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $unProjet['nom'] }}</h5>
                                    <p class="card-text">{{ $unProjet['description'] }}</p>
                                </div>
                        </div>
                    </div>

            <div class="modal fade" id="{{ $unProjet['nom'] }}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="modalCarousel{{ $unProjet['nom'] }}" class="carousel slide"
                                 data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($lesImages as $k => $img)
                                        <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                            <img width="100%" src="{{ $img }}">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#modalCarousel{{ $unProjet['nom'] }}"
                                   role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#modalCarousel{{ $unProjet['nom'] }}"
                                   role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
@endsection

