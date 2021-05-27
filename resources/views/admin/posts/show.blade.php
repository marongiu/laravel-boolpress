@extends('layouts.app')

@section('content')

  <div class="text-center">
    <p>Titolo: {{$post->title}}</p>
    <p>Categoria: {{$post->category->name}}</p>
    <p>Descrizione:{{$post->description}}</p>
  </div>

@endsection
