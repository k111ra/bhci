<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding: 10px ;">
                <div class="list-group">
                    <a href="{{ route('biens.index') }}" class="list-group-item list-group-item-action active">
                        Bien
                    </a>
                    <a href="{{ route('type-biens.index') }}" class="list-group-item list-group-item-action">Types de
                        bien</a>
                    <a href="{{ route('promoteurs.index') }}"
                        class="list-group-item list-group-item-action">Promoteur</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="margin-top: 20px;">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h5 class="card-title">Ajouter un Bien</h5>
                    <div class="card-body">
                        <form action="{{ route('biens.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="images" class="form-label">Images (sélectionnez plusieurs)</label>
                                <input type="file" class="form-control" id="images" name="images[]" multiple>
                            </div>
                            <div class="mb-3">
                                <label for="promoteur_id" class="form-label">Promoteur:</label>
                                <select class="form-control" id="promoteur_id" name="promoteur_id" required>
                                    <option value="autre">Seletionnez un promoteur...</option>

                                    @foreach ($promoteurs as $promoteur)
                                        <option value="{{ $promoteur->id }}">{{ $promoteur->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type_bien_id" class="form-label">Type de Bien:</label>
                                <select class="form-control" id="type_bien_id" name="type_bien_id" required>
                                    <option value="">Selectionnez un type de bien...</option>

                                    @foreach ($typeBiens as $typeBien)
                                        <option value="{{ $typeBien->id }}">{{ $typeBien->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom du Bien:</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="localisation" class="form-label">Localisation:</label>
                                <input type="text" class="form-control" id="localisation" name="localisation">
                            </div>
                            <div class="mb-3">
                                <label for="prix" class="form-label">Prix:</label>
                                <input type="text" class="form-control" id="prix" name="prix">
                            </div>
                            <div class="mb-3">
                                <label for="surfaces" class="form-label">Surfaces:</label>
                                <input type="text" class="form-control" id="surfaces" name="surfaces">
                            </div>
                            <div class="mb-3">
                                <label for="nbr_piece" class="form-label">Nombre de pièces:</label>
                                <input type="text" class="form-control" id="nbr_piece" name="nbr_piece">
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                    @if($biens->count() > 0)
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5>Liste des Biens</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Localisation</th>
                                        <!-- ... (ajoutez d'autres colonnes si nécessaire) -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($biens as $bien)
                                        <tr>
                                            <th scope="row">{{ $bien->id }}</th>
                                            <td>{{ $bien->nom }}</td>
                                            <td>{{ $bien->localisation }}</td>
                                            <!-- ... (ajoutez d'autres colonnes si nécessaire) -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
