@extends('layouts.layout')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            @foreach ($biens as $bien)
                <div class="col-md-4" style="padding-top: 15px;">
                    <div id="carousel{{ $bien->id }}" class="carousel slide r-top" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('storage/images/' . $bien->images[0]) }}" alt="First slide">

                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets/images/AEBI-/Villa-3-pièces/Image1.png') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets/images/AEBI-/Villa-3-pièces/Image1.png') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel{{ $bien->id }}" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel{{ $bien->id }}" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card r-bottom">
                        <a href="{{ route('bien.details', $bien->id) }}" style="text-decoration: none;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>{{ $bien->nom }} <span>{{ $bien->surfaces }}</span></span>
                                    </div>
                                    <div class="col-md-5">
                                        <span style="color: #ad8b3a;">{{ $bien->prix }}</span>
                                    </div>
                                </div>
                                <br>
                                <p class="card-text">{{ $bien->localisation }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/images/AEBI-/Villa-3-pièces/Infos_Bien_Immo.txt') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/images/AEBI-/Villa-5-Pièces/Infos_Bien_Immo.txt') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div> --}}
    @endsection
