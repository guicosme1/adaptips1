@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')

<h1>Filmes Adapti</h1>
<a href="{{ route('movie.create') }}"><button>Adicionar Filme</button></a>


<h4></h4>
@foreach ($movies as $movie)
    <img src="/storage/{{ $movie->image }}" style="width: 100px;height:140px " alt="Poster do filme">
    <h4>Título: {{ $movie->title }}</h4>
    <h4>Genero: {{ $movie->genre }}</h4>
    <h4>Lançamento: {{ $movie->release }}</h4>
    <h4>Sinopse: {{ $movie->synopsis }}</h4>
    <h4>País: {{ $movie->country->pais }}</h4>
    <h4>Nota: {{ $movie->rating }}</h4>
    <a href="{{ route('movie.edit', $movie->id) }}"><button type="submit" class="btn btn-info edit-btn">  Editar  </button></a>
    <form action="{{ route('movie.destroy',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
    
    </form>
    <h4></h4>
    
@endforeach


@endsection