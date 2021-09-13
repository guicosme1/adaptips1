@extends('layouts.main')

@section('title', 'Form')

@section('content')
<div id="cards-container" class="row">
    <div id="card" class="card3">
        <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>Título</h4><input type="text" name="title" required class="input">
            <h4>Genero</h4><input type="text" name="genre" required class="input">
            <h4>Lançamento</h4><input type="text" name="release" required class="input">
            <h4>Sinopse</h4><input type="text" name="synopsis" required class="input">
            <h4>Nota</h4><input type="text" name="rating" required class="input">
            <h4>País</h4><select name="country_id" class="select">
                <option value="" disabled selected>-- Escolha um País --</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{$country->pais}}</option>
                @endforeach
            </select>
            <h4>Imagem</h4><input type="file" name="image" required>

            <h4></h4><button type="submit">Enviar</button>
        </form>
    </div>
</div>

@endsection