@extends('navbar')
@section('contenu1')
    <br>
    <div>
        <div class="text-center">
            <h3>Mes Stages</h3>
        </div>
        <div class="container">
            <div class="row justify-content-around">
                @foreach($lesStages as $i => $unStage)
                    <div class="col-sm-4 mb-3">
                        <div class="card" id="cardStage">
                            @php
                                $lesImages = explode(";", $unStage['images']);
                            @endphp
                            <div id="cartePhoto" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($lesImages as $k => $img)
                                        <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                            <a data-toggle="modal" href="" data-target="#{{$unStage['nom']}}"><img
                                                    data-toggle="modal" href="" data-target="{{$unStage['id']}}"
                                                    width="100%" src="{{ $img }}"></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $unStage['nom'] }}</h5>
                                <p class="card-text">@php echo substr(nl2br($unStage['description']), 0, 110) @endphp...
                                    <a data-toggle="modal" data-target="#desc{{$unStage['id']}}" href="">Lire la
                                        suite</a></p>
                            </div>
                        </div>
                        <div class="modal fade" id="{{ $unStage['nom'] }}" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$unStage['nom']}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        <div id="modalCarousel{{ $unStage['nom'] }}" class="carousel slide"
                                             data-ride="carousel">
                                            <div class="carousel-inner">
                                                @foreach($lesImages as $k => $img)
                                                    <div class="carousel-item {{ ($k == 0) ? "active" : ""}}">
                                                        <img width="100%" src="{{ $img }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#modalCarousel{{ $unStage['nom'] }}"
                                               role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#modalCarousel{{ $unStage['nom'] }}"
                                               role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        @foreach($lesImages as $key => $uneImage)
                                            <a role="button" class="btn btn-outline-info" href="{{$uneImage}}"
                                               target="_blank">Image {{$key}}</a>
                                        @endforeach
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="desc{{$unStage['id']}}" tabindex="-1" role="dialog"
                             aria-labelledby="desc{{$unStage['nom']}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $unStage['nom'] }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>@php echo nl2br($unStage['description']) @endphp</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
@endsection
@extends('pied')

