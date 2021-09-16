@extends('layouts.main')

@section('title', 'Editar Filme | Adapti')

@section('content')

<div id="cards-container" class="row">
    <div id="card" class="card3">
        <form action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h4>Título</h4><input type="text" name="title" required value="{{$movie->title}}" class="input">
            <h4>Genero</h4><input type="text" name="genre" required value="{{$movie->genre}}" class="input"> 
            <h4>Lançamento</h4><input type="text" name="release" required value="{{$movie->release}}" class="input">
            <h4>Nota</h4><input type="text" name="rating" required value="{{$movie->rating}}" class="input">
            <h4>País</h4><select style="border-width: 2px;" name="country_id" class="select">
                <option value="" disabled selected>-- Escolha um País --</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{$country->pais}}</option>
                @endforeach
            </select>
            <h4>Sinopse</h4><textarea class="input-text" type="text" name="synopsis" required value="{{$movie->synopsis}}"></textarea>
            <h4>Imagem</h4><input type="file" name="image" required value="{{$movie->image}}"> 
            <h4></h4><img src="/storage/{{ $movie->image }}" style="width:100px;height:100px;" alt="poster do filme {{$movie->title}}">
            <h4></h4><button type="submit" style="margin: 10px">Enviar</button>
        </form>
        <form action="{{ route('movie.destroy',$movie->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">Deletar</button>
        </form>
    </div>
</div>

@endsection