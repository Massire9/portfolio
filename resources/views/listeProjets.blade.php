@extends('navbar')
@section('contenu1')
    <div class="card-deck">
    @foreach($lesProjets as $unProjet)
        @php
        $lesImages = explode(";", $unProjet['photo'])
        @endphp
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-25" src="{{ asset('images/'.$lesImages[0]) }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-25" src="{{ asset('images/'.$lesImages[1]) }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-25" src="{{ asset('images/'.$lesImages[2]) }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $unProjet['nom'] }}</h5>
                    <p class="card-text">{{ $unProjet['description'] }}</p>
                </div>
    @endforeach
    </div>
@endsection
