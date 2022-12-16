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
        <h3>LISTE DES ETUDIANTS</h3>
        <div>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td>DATE</td>
                        <td>NOM</td>
                        <td>PRENOM</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $et)
                        <tr>
                            <td>{{ date_format($et->created_at,'d/m/Y H:i:s') }}</td>
                            <td>{{ $et->last_name }}</td>
                            <td>{{ $et->first_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
