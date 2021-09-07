@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')

<a href="{{ route('movie.create') }}"><button>Criar</button></a>
<h1>Filmes Adapti</h1>
@foreach ($movies as $movie)
    <img src="/storage/{{ $movie->image }}" style="width: 100px;height:100px " alt="Poster do filme">
    <h4>Título: {{ $movie->title }}</h4>
    <h4>Genero: {{ $movie->genre }}</h4>
    <h4>Lançamento: {{ $movie->release }}</h4>
    <h4>Sinópse: {{ $movie->synopsis }}</h4>
    <h4>País: {{ $movie->country->pais }}</h4>
    <h4>Nota: {{ $movie->rating }}</h4>
    <a href="{{ route('movie.edit', $movie->id) }}"><button>Editar</button></a>
    <h4></h4>
    
@endforeach


@endsection