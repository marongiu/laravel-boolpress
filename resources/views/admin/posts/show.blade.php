@extends('layouts.app')

@section('content')

  <div class="text-center">
    <p>Titolo: {{$post->title}}</p>
    <p>Descrizione:{{$post->description}}</p>
  </div>

@endsection
