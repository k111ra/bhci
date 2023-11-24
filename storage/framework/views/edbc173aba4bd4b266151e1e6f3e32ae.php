<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
    <!-- Bootstrap CSS -->

    <title>Navbar avec menu déroulant</title>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav w-100 custom-navbar-nav">

                        <li class="nav-item flex-grow-1 w-100 dropdown">
                            <div class="dropdown w-100" style="">
                                <button class="custom-dropdown-toggle w-100 " type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Type de bien
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a; padding-left: 20px;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->
                                    <form class="p-3 horizontal-form">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="villa">
                                            <label class="form-check-label" for="villa">Villa</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="appartement">
                                            <label class="form-check-label" for="appartement">Appartement</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="duplex">
                                            <label class="form-check-label" for="duplex">Duplex</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="terrain">
                                            <label class="form-check-label" for="terrain">Terrain</label>
                                        </div>
                                        <br>
                                        <hr>
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            onclick="resetDropdown('dropdownMenuButton1')">Réinitialiser</button>
                                        <button type="button" class="btn btn-primary btn-sm"
                                            onclick="applyDropdown('dropdownMenuButton1')">Valider</button>
                                    </form>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Location
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->

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

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Superficie
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Promoteur
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-100 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pieces
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown w-120 flex-grow-1 mr-3">
                            <div class="dropdown">
                                <button class="custom-dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Recherche avancée
                                    <i class="fas fa-chevron-down" style="color: #ad8b3a;"></i>
                                </button>
                                <ul class="dropdown-menu custom-dropdown-menu submenu"
                                    aria-labelledby="dropdownMenuButton1">
                                    <!-- Formulaire dans le dropdown -->

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-4">
                <div id="carouselExample1" class="carousel slide r-top" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Image1.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Infos_Bien_Immo.txt')); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card r-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <span>Maison <span>4 pieces 143 m2</span></span>
                            </div>
                            <div class="col-md-5">
                                <span style="color: #ad8b3a;"> 26 500 000 FCFA</span>
                            </div>
                        </div>
                        <br>
                        <p class="card-text">DANZE 2</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div id="carouselExample1" class="carousel slide r-top" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Image1.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Infos_Bien_Immo.txt')); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card r-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <span>Maison <span>4 pieces 143 m2</span></span>
                            </div>
                            <div class="col-md-5">
                                <span style="color: #ad8b3a;"> 26 500 000 FCFA</span>
                            </div>
                        </div>
                        <br>
                        <p class="card-text">DANZE 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="carouselExample1" class="carousel slide r-top" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Image1.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Infos_Bien_Immo.txt')); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card r-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <span>Maison <span>4 pieces 143 m2</span></span>
                            </div>
                            <div class="col-md-5">
                                <span style="color: #ad8b3a;"> 26 500 000 FCFA</span>
                            </div>
                        </div>
                        <br>
                        <p class="card-text">DANZE 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="carouselExample1" class="carousel slide r-top" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Image1.png')); ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo e(asset('assets/images/AEBI-/Villa-3-pièces/Infos_Bien_Immo.txt')); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card r-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <span>Maison <span>4 pieces 143 m2</span></span>
                            </div>
                            <div class="col-md-5">
                                <span style="color: #ad8b3a;"> 26 500 000 FCFA</span>
                            </div>
                        </div>
                        <br>
                        <p class="card-text">DANZE 2</p>
                    </div>
                </div>
            </div>
            <!-- Ajoutez ici d'autres cartes si nécessaire -->
        </div>
    </div>

    <!-- ... Votre code existant ... -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('assets/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\bhci\resources\views/welcome.blade.php ENDPATH**/ ?>