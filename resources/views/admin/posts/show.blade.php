@extends('layouts.app')

@section('content')

  <div class="text-center">
    <p>Titolo: {{$post->title}}</p>

    @if ($post->category)
      <a href="{{route('category.index', ['slug' => $post->category->slug])}}">Categoria: {{$post->category->name}}</a>
    @endif
    <p>Descrizione:{{$post->description}}</p>

  </div>

@endsection
