@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')

<h1>Filmes UFES</h1>
@foreach ($movies as $movie)
    <h4>{{ $movie->title }} | País: {{ $movie->country->pais }} | Nota: {{ $movie->rating }}</h4>
    
@endforeach

@endsection