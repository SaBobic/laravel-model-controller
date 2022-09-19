<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        <div class="row g-4">
            @forelse ($movies as $movie)
                <div class="col-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                                <li class="list-group-item">Data uscita: {{ $movie->date }}</li>
                                <li class="list-group-item">Voto degli utenti: {{ $movie->vote }}</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Guarda ora!</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Ci dispiace!</h4>
                    <hr>
                    <p class="mb-0">Non è stato trovato alcun film.</p>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>