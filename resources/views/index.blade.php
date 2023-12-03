@extends('layouts.layout')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            @foreach ($biens as $bien)
                <div class="col-md-4" style="padding-top: 15px;">
                    <div id="carousel{{ $bien->id }}" class="carousel slide r-top" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($bien->images as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ asset('storage/images/' . $image) }}" alt="Slide {{ $index + 1 }}">
                                </div>
                            @endforeach
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
    </div>
@endsection
