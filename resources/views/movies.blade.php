@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')

<div class="buscar">
    <form action="{{ route('movie.index') }}" method="GET">
        @csrf
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque um Filme...">
        <button>Buscar</button>
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
            <img src="/storage/{{ $movie->image }}" style="width: 130px;height:200px;
            box-shadow: 3px 3px 25px rgb(52, 128, 111);" alt="Poster do filme">
        </div>

        <div class="info">
            <p><strong>Genero: </strong>{{ $movie->genre }}</p>
            <p><strong>Lançamento: </strong>{{ $movie->release }}</p>
            <p><strong>País: </strong>{{ $movie->country->pais }}</p>
            <p><strong>Nota: </strong>{{ $movie->rating }}</p>
            <p><strong>Sinopse: </strong>{{ $movie->synopsis }}</p>
        </div>

        <div class="buttons">
            <a href="{{ route('movie.edit', $movie->id) }}"><button type="submit">  Editar  </button></a>
            <form action="{{ route('movie.destroy',$movie->id) }}" method="POST" enctype="multipart/form-data"
            style="margin: 10px; display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">Deletar</button>
            </form>
        </div>

    </div>
    @endforeach
    @if (count($movies) == 0)
        <p>Nenhum filme foi encontrado!</p>
    @endif
</div>

@endsection