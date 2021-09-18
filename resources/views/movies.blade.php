@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')

<div class="buscar">
    <form action="{{ route('movie.index') }}" method="GET">
        @csrf
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque um Filme...">
        <button class="search-button"><i class="fas fa-search"></i></button>
    </form>
</div>

@if ($search)
    <h3 style="margin-left: 20px; margin-top: 10px">Buscando por {{ $search }}:</h3>
@endif
<div id="cards-container" class="row">
    @foreach ($movies as $movie)
    <div id="card" class="card1">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <img src="/storage/{{ $movie->image }}" class="card-img" alt="Poster do {{ $movie->title }}">
            <div class="info">
                <p class="p-title"><strong>Título: </strong>{{ $movie->title }}</p>
                <p><strong>Genero: </strong>{{ $movie->genre }}</p>
                <p><strong>Lançamento: </strong>{{ $movie->release }}</p>
                <p><strong>País: </strong>{{ $movie->country->pais }}</p>
                <p><strong>Nota: </strong>{{ $movie->rating }}</p>
                <p><strong>Sinopse: </strong>{{ substr($movie->synopsis, 0, 180) }}...</p>
                <div class="buttons">
                    <a href="{{ route('movie.edit', $movie->id) }}"><button type="submit"><i class="far fa-edit"></i></button></a>
                    <form action="{{ route('movie.destroy',$movie->id) }}" method="POST" enctype="multipart/form-data"
                    style="margin: 10px; display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @if (count($movies) == 0)
        <p>Nenhum filme foi encontrado!</p>
    @endif
</div>

@endsection