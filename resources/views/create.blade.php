@extends('layouts.main')

@section('title', 'Form')

@section('content')

<form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Título</h4><input type="text" name="title" required>
    <h4>Genero</h4><input type="text" name="genre" required>
    <h4>Lançamento</h4><input type="text" name="release" required>
    <h4>Sinopse</h4><input type="text" name="synopsis" required>
    <h4>Nota</h4><input type="text" name="rating" required>
    <h4></h4><select name="country_id">
        <option value="" disabled selected>-- Escolha um País --</option>
        @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{$country->pais}}</option>
        @endforeach
    </select>
    <h4>Imagem</h4><input type="file" name="image" required>

    <button type="submit">Enviar</button>
</form>

@endsection