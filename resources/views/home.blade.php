<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <div class="card-container">
            @foreach ($movies as $movie)
            <div class="card">
                <h5 class="card-title">{{ $movie['title'] }}</h5>
                <h6 class="card-subtitle">{{ $movie['original_title'] }}</h6>
                <div class="card-infos">
                    <span>Nationality: {{ $movie['nationality'] }}</span>
                    <span>Date: {{ $movie['date'] }}</span>
                    <span>Vote: {{ $movie['vote'] }}</span>
                </div>
                

            </div>
            @endforeach
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>