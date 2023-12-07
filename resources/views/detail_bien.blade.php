@extends('layouts.layout')

@section('content')
<div class=" mt-5" style="padding: 0 10px 0 10px">
    <div class="row">
        <div class="col-sm-3 " style="padding-top: 15px;">
            <div class="TypeBien" style="font-weight: 500; font-size: 4rem; color:#ad8b3a;">
                <span>{{ $details->typeBien->nom }} à vendre</span>
                <span>{{ $details->nbr_piece }}.{{ $details->surfaces }}</span>
            </div>
            <br>
            <div>
                <span style="font-size: 20px">
                    <i class="fa-solid fa-location-dot" style="color: #ad8b3a"></i> {{ $details->localisation }}
                </span>
            </div>

            <div class="TypeBien" style="font-weight: 500; font-size: 4rem;">
                <span>{{ $details->prix }}</span>
            </div>
            <div>
                <img src="{{ asset('images/promoteurs/' . $details->promoteur->logo) }}" width="200px"
                    alt="">
                {{-- <span>{{ $details->promoteur->nom }}</span> --}}
            </div>
        </div>
        <div class="col-sm-5" style="padding-top: 15px;">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($details->images as $key => $image)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/images/' . $image) }}" class="d-block w-100"
                                alt="Image {{ $key + 1 }}" style="object-fit: cover; height: 600px;">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="col-sm-4">
            <form>
                <div>
                    <span style="font-weight: 500; font-size: 20px; color:#ad8b3a;">
                        Ce bien vous intéresse ?
                    </span>
                    <br>
                    Contactez vite l'agence pour le visiter !
                </div>
                <div class="row mt-3">
                    <div class="form-group col-md-6">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom">Prenoms</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Prenoms">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="tel" class="form-control" id="telephone" placeholder="+225...">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse"
                        placeholder="Cocody Boulevard Koffi GADHO ">
                </div>
                <div class="row mt-3">
                    <div class="check">
                        <div>
                            <span>
                                Vous préférez être contacté par :
                            </span>
                        </div>
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Email
                        </label>
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Telephone
                        </label>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Je veux..." id="message" style="height: 100px"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection
