<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$movie->title}}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <div class="card">
            {{-- TITLES --}}
            <div class="card-title-container">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle">{{ $movie->original_title }}</h6>
            </div>
            {{-- INFOS --}}
            <div>
                <div class="card-info-container">
                    <h5 class="card-info">Nationality: <span>{{ $movie->nationality }}</span></h5>
                    <h5 class="card-info">Date: <span>{{ $movie->date }}</span></h5>
                    <h5 class="card-info">Vote: <span>{{ $movie->vote }}</span></h5>
                </div>
                {{-- BUTTON --}}
                <div class="btn-container">
                    <a class="discover-btn" href="#">Scopri di più</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>