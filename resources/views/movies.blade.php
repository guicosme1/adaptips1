@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')

<a href="{{ route('movie.create') }}"><button>Criar</button></a>
<h1>Filmes UFES</h1>
@foreach ($movies as $movie)
    <h4>{{ $movie->title }} | País: {{ $movie->country->pais }} | Nota: {{ $movie->rating }}</h4>
    <a href="{{ route('movie.edit', $movie->id) }}"><button>Editar</button></a>
    <img src="/storage/{{ $movie->image }}" style="width: 100px;height:100px " alt="Poster do filme">
@endforeach


@endsection