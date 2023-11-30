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
                    <a href="{{ route('biens.index') }}" class="list-group-item list-group-item-action">
                      Bien
                    </a>
                    <a href="{{ route('type-biens.index') }}" class="list-group-item list-group-item-action">Types de bien</a>
                    <a href="{{ route('promoteurs.index') }}" class="list-group-item list-group-item-action active">Promoteur</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        @if(session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <h5 class="card-title">Ajouter un Promoteur</h5>
                        <form action="{{ route('promoteurs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="promoteurNom" class="form-label">Nom du Promoteur</label>
                                <input type="text" class="form-control" id="promoteurNom" name="nom" placeholder="Entrez le nom du promoteur" required>
                            </div>
                            <div class="mb-3">
                                <label for="promoteurDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="promoteurDescription" name="description" rows="3" placeholder="Entrez la description du promoteur" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="contact" name="contact">
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                        @if($promoteurs->count() > 0)
                            <h5 class="mt-4">Liste des Promoteurs</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($promoteurs as $promoteur)
                                        <tr>
                                            <th scope="row">{{ $promoteur->id }}</th>
                                            <td>{{ $promoteur->nom }}</td>
                                            <td>{{ $promoteur->description }}</td>
                                            <td>{{ $promoteur->contact }}</td>
                                            <td>{{ $promoteur->logo }}</td>
                                            <td>{{ $promoteur->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
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
