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
                    <a href="{{ route('type-biens.index') }}" class="list-group-item list-group-item-action">Types de bien</a>
                    <a href="{{ route('promoteurs.index') }}" class="list-group-item list-group-item-action">Promoteur</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter un Promoteur</h5>
                        <form>
                            <div class="mb-3">
                                <label for="promoteurNom" class="form-label">Nom du Promoteur</label>
                                <input type="text" class="form-control" id="promoteurNom" placeholder="Entrez le nom du promoteur">
                            </div>
                            <div class="mb-3">
                                <label for="promoteurDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="promoteurDescription" rows="3" placeholder="Entrez la description du promoteur"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
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
