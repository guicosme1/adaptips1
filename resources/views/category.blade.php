@extends('layouts.main')

@section('title', 'Categorias')

@section('content')
    @if($id != null)
        <p>Categoria de filmes: {{ $id }}</p>
    @endif
    
@endsection