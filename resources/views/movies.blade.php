@extends('layouts.main')

@section('title', 'FILMES | Adapti')

@section('content')
<h4 id="pular"></h4>
@if ($search)
    <h3 style="margin-left: 20px; margin-top: 10px">Buscando por {{ $search }}:</h3>
@endif
<div id="cards-container" class="row">
    @foreach ($movies as $movie)
    <div id="card" class="card col-md-3">
        <div class="card-body">
            <img src="/storage/{{ $movie->image }}" style="width: 130px;height:200px; 
            border-radius: 5px; box-shadow: 3px 3px 25px rgb(52, 128, 111);" alt="Poster do filme">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p>Genero: {{ $movie->genre }}</p>
            <p>Lançamento: {{ $movie->release }}</p>
            <p>Sinopse: {{ $movie->synopsis }}</p>
            <p>País: {{ $movie->country->pais }}</p>
            <p>Nota: {{ $movie->rating }}</p>
        </div>
        <div id="botoes">
            <a href="{{ route('movie.edit', $movie->id) }}"><button type="submit" 
            class="btn btn-info edit-btn" style="color: white; width: 100px;">  Editar  </button></a>
            <form action="{{ route('movie.destroy',$movie->id) }}" method="POST" enctype="multipart/form-data"
            style="margin: 10px; display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" 
                style="width: 100px;">Deletar</button>
            </form>
        </div>
    </div>
    @endforeach
    @if (count($movies) == 0)
        <p>Nenhum filme foi encontrado!</p>
    @endif
</div>


@endsection