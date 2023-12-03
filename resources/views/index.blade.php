@extends('layouts.layout')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            @foreach ($biens as $bien)
                <div class="col-md-4" style="padding-top: 15px;">
                    <div id="carousel{{ $bien->id }}" class="carousel r-top slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($bien->images as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/images/' . $image) }}" class="d-block w-100 img-fluid"
                                        alt="Image {{ $key + 1 }}" style="object-fit: cover; height: 300px;">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $bien->id }}"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $bien->id }}"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
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
