<div class="">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <form  action="{{ route('filtrer.biens') }}" method="post">
                    @csrf
                    <ul class="navbar-nav w-100 custom-navbar-nav">

                        <li class="nav-item flex-grow-1 w-100 dropdown">
                            <div class="dropdown w-100" style="">
                                <button class="custom-dropdown-toggle " type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Type de bien
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a; padding-left: 20px;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->
                                    <div class="p-3 horizontal-form">
                                        @foreach ($typeBiens as $type)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $type->id }}" name="types[]" id="{{ $type->nom }}">
                                                <label class="form-check-label"
                                                    for="{{ $type->nom }}">{{ $type->nom }}</label>
                                            </div>
                                        @endforeach
                                        <br>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Localisation
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-crosshairs-simple"
                                                style="color: #ad8b3a"></i></span>
                                        <input name="localisation" type="text" class="form-control"
                                            placeholder="Localisation">
                                    </div>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Prix Max/Min
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->
                                    <li>
                                        <div class="px-4 py-3 row">
                                            <div class="mb-3">
                                                <label for="prixMin" class="form-label">Prix Min</label>
                                                <input type="number" name="prixMin" class="form-control" id="prixMin"
                                                    placeholder="Prix Min">
                                            </div>
                                            <div class="mb-3">
                                                <label for="prixMax" class="form-label">Prix Max</label>
                                                <input type="number" name="prixMax" class="form-control" id="prixMax"
                                                    placeholder="Prix Max">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button"
                                    id="dropdownMenuButtonSuperficie" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Superficie
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButtonSuperficie">
                                    <li>
                                        <div class="px-4 py-3">
                                            <div class="mb-3">
                                                <label for="superficieMin" class="form-label">Superficie Min</label>
                                                <input type="number" name="superficieMin" class="form-control"
                                                    id="superficieMin" placeholder="Superficie Min">
                                            </div>
                                            <div class="mb-3">
                                                <label for="superficieMax" class="form-label">Superficie Max</label>
                                                <input type="number" name="superficieMax" class="form-control"
                                                    id="superficieMax" placeholder="Superficie Max">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button"
                                    id="dropdownMenuButtonPromoteur" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Promoteur
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButtonPromoteur">
                                    <li>
                                        <div class="px-4 py-3">
                                            <div class="mb-3">
                                                <label for="promoteur" class="form-label">Sélectionner un
                                                    promoteur</label>
                                                <!-- Ajouter un menu déroulant pour sélectionner le promoteur -->
                                                <select class="form-select" name="promoteur" id="promoteur"
                                                    aria-label="Sélectionner un promoteur">
                                                    <option value="">Choisissez un promoteur...</option>
                                                    @foreach ($promoteurs as $promoteur)
                                                        <option value="{{ $promoteur->id }}">{{ $promoteur->nom }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button"
                                    id="dropdownMenuButtonPieces" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Nombre de Pièces
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButtonPieces">
                                    <li>
                                        <div class="px-4 py-3">
                                            <div class="mb-3">
                                                <label for="piecesMin" class="form-label">Nombre de Pièces Min</label>
                                                <input type="number" name="nbrePieceMin" class="form-control"
                                                    id="piecesMin" placeholder="Nombre de Pièces Min">
                                            </div>
                                            <div class="mb-3">
                                                <label for="piecesMax" class="form-label">Nombre de Pièces Max</label>
                                                <input type="number" name="nbrePieceMax" class="form-control"
                                                    id="piecesMax" placeholder="Nombre de Pièces Max">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-120 flex-grow-1 mr-3">
                            <button class="custom-dropdown-toggle w-100" style="background-color: #ad8b3a;"
                                type="submit" id="dropdownMenuButton1" aria-haspopup="true" aria-expanded="false">
                                <span>
                                    Recherche
                                </span>
                            </button>
                        </li>

                    </ul>
                </form>
            </div>
        </div>
    </nav>
</div>
