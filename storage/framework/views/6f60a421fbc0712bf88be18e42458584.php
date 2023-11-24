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

    <title>Page d'Administration</title>
</head>

<body>
    <div class="container mt-4">
        <!-- Ajoutez votre barre de navigation ici -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Votre contenu de menu -->
        </nav>

        <!-- Section d'administration -->
        <div class="row mt-4">
            <div class="col-md-3">
                <!-- Menu latéral d'administration -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Ajouter un Bien
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Gérer les Biens</a>
                    <a href="#" class="list-group-item list-group-item-action">Statistiques</a>
                    <!-- Ajoutez d'autres liens du menu si nécessaire -->
                </div>
            </div>
            <div class="col-md-9">
                <!-- Contenu principal de la page d'administration -->
                <h2>Ajouter un Nouveau Bien</h2>
                <!-- Formulaire d'ajout de bien -->
                <form>
                    <!-- Ajoutez les champs nécessaires pour ajouter un bien -->
                    <div class="mb-3">
                        <label for="nomBien" class="form-label">Nom du Bien</label>
                        <input type="text" class="form-control" id="nomBien" name="nomBien">
                    </div>
                    <!-- Ajoutez d'autres champs du formulaire -->

                    <button type="submit" class="btn btn-primary">Ajouter Bien</button>
                </form>
            </div>
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
<?php /**PATH C:\laragon\www\bhci\resources\views/admin/admin.blade.php ENDPATH**/ ?>