<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    <title>Etudiants</title>
</head>
<body>
    <div class="container">
        <h3>NOUVEL ETUDIANT</h3>
        <div>
            <form action="/etudiants" method="post">
                @csrf
                <div class="form-group">
                    <label for="">NOM</label>
                    <input type="text" required name="last_name" class="form-control" placeholder="Saisir le nom">
                </div>
                <div class="form-group">
                    <label for="">PRENOM</label>
                    <input type="text" required name="first_name" class="form-control" placeholder="Saisir le prenom">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-sm">ENREGISTRER</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
