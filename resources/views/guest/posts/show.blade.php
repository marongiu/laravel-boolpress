@extends('layouts.app')

@section('content')
  <div class="content">
    <p>Titolo: {{  $post->title ?? 'DEFAULT' }}</p>
    <p>Descrizione: {{$post->description ?? 'DEFAULT'}}</p>
    <h4>
      @if ($post->category)
        <a href="{{route('category.index', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a>
      @endif
    </h4>
  </div>
@endsection
