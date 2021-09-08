@extends('layouts.main')

@section('title', 'Form')

@section('content')

<div id="cards-container" class="row">
    <div id="card" class="card col-md-3">
        <form action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h4>Título</h4><input type="text" name="title" required value="{{$movie->title}}">
            <h4>Genero</h4><input type="text" name="genre" required value="{{$movie->genre}}">
            <h4>Lançamento</h4><input type="text" name="release" required value="{{$movie->release}}">
            <h4>Sinopse</h4><input type="text" name="synopsis" required value="{{$movie->synopsis}}">
            <h4>Nota</h4><input type="text" name="rating" required value="{{$movie->rating}}">
            <h4>País</h4><input type="number" name="country_id" required value="{{$movie->country_id}}">
            <h4>Imagem</h4><input type="file" name="image" required value="{{$movie->title}}">

            <button type="submit">Enviar</button>
        </form>
    </div>
</div>

@endsection