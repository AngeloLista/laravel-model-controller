@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <nav>
        <a class="btn" href="{{route('movies.index')}}">Vai ai film!</a>
    </nav>
@endsection