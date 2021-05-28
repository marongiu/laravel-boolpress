@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-center bg-info">
              <h5 class="text-light text-capitalize">{{$post->title}}</h5>
              @if ($post->category)
                <a href="{{route('category.index', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a>
              @endif
            </div>

            <div class="card-body">
              <p>{{$post->description}}</p>
              @if ($post->cover)
                <img style="max-width: 50px;"src="{{asset($post->cover)}}" alt="">
              @endif
            </div>
          </div>
        </div>
    </div>
  </div>

  </div>

@endsection
