@extends('layouts.main')

@section('title', 'Editar Filme | Adapti')

@section('content')

<div id="ccards-container" class="row">
    <div id="ccard">
        <form action="{{ route('movie.update',$movie->id) }}" class="card4" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Título</label>
                <h4></h4><input type="text" name="title" required value="{{$movie->title}}" class="input">
                <h4></h4><label for="title">Genero</label>
                <h4></h4><input type="text" name="genre" required value="{{$movie->genre}}" class="input"> 
                <h4></h4><label for="title">Lançamento</label>
                <h4></h4><input type="text" name="release" required value="{{$movie->release}}" class="input">
                <h4></h4><label for="title">Nota</label>
                <h4></h4><input type="text" name="rating" required value="{{$movie->rating}}" class="input">
                <h4></h4><label for="title">País</label>
                <h4></h4><select style="border-width: 2px;" name="country_id" class="select">
                    <option value="" disabled selected>-- Escolha um País --</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{$country->pais}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <h4></h4><label for="title">Sinopse</label>
                <h4></h4><textarea class="input-text" type="text" name="synopsis" required value="{{$movie->synopsis}}"></textarea>
                <h4></h4><label for="title">Imagem</label>
                <h4></h4><input type="file" name="image" required value="{{$movie->image}}"> 
                <h4></h4><img src="/storage/{{ $movie->image }}" style="width:90px;height:120px; 
                margin-top: 10px; box-shadow: 0px 0px 7px black;" alt="poster do filme {{$movie->title}}">
                <h4></h4><button type="submit" style="margin: 10px">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection