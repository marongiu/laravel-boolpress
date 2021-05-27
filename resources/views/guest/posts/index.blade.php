@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @foreach ($posts as $post)
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-center bg-info">
              <h5 class="text-light text-capitalize">{{$post->title}}</h5>
            </div>

            <div class="card-body">
              <p>{{$post->description}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
