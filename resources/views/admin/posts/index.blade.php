@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="{{route('admin.posts.create')}}">Crea Post</a>
      </div>
    </div>
      <div class="row justify-content-center">
        @foreach ($posts as $post)
          <div class="col-md-4">
              <div class="card mt-4">
                  <div class="card-header">
                    {{$post->title}}
                  </div>

                  <div class="card-body">
                      {{$post->description}}

                      <a href="{{route('admin.posts.edit', ['post' => $post->id])}}">Modifica</a>
                      <form class="text-primary" action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="text-danger" type="submit" name="" value="Elimina">
                      </form>

                      <a href="{{route('admin.posts.show', ['post' => $post->slug])}}">Dettagli</a>
                  </div>
              </div>
          </div>

        @endforeach
      </div>
  </div>
@endsection
