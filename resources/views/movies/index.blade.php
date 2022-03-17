@extends('layouts.main')

@section('title', 'Movies')

@section('content')
<div class="card-container">
    @foreach ($movies as $movie)
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
                <a class="discover-btn" href="{{ route('movies.show', ['id'=> $movie->id]) }}">Scopri di più</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection