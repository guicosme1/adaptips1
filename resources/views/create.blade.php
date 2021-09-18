@extends('layouts.main')

@section('title', 'Adicionar Filmes | Adapti')

@section('content')
<div id="cards-container" class="row">
    <div id="card" class="card3">
        <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Título</label>
            <h4></h4><input type="text" id="title" name="title" placeholder="Star Wars, Vingadores, etc." required class="input">
            <h4></h4><label for="title">Genero</label>
            <h4></h4><input type="text" name="genre" placeholder="Ação, Aventura, etc." required class="input">
            <h4></h4><label for="title">Lançamento</label>
            <h4></h4><input type="date" name="release" required class="input">
            <h4></h4><label for="title">Nota</label>
            <h4></h4><input type="text" name="rating" placeholder="7.77" required class="input">
            <h4></h4><label for="title">País</label>
            <h4></h4><select name="country_id" class="select" style="border-width: 2px;">
                <option value="" disabled selected>-- Escolha um País --</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{$country->pais}}</option>
                @endforeach
            </select>
            <div>
                <h4></h4><label for="title">Sinopse</label>
                <h4></h4><textarea type="text" name="synopsis" required class="input-text"></textarea>
                <h4></h4><label for="title">Imagem</label>
                <h4></h4><input type="file" name="image" required>
            </div>


            <h4></h4><button type="submit" style="margin: 10px; width: 100px">Adicionar Filme</button>
        </form>
    </div>
</div>

@endsection