@extends('layouts.main')

@section('content')
<div class="card-container">
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
                <a class="discover-btn" href="{{route('movies.index')}}">Torna alla lista</a>
            </div>
        </div>
    </div>
</div>
@endsection