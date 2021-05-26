@extends('layouts.app')

@section('main')
  <div class="container">
      <div class="row justify-content-center">
        @foreach ($posts as $post)

          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                    {{$post->title}}
                  </div>

                  <div class="card-body">
                      {{$post->description}}
                  </div>
              </div>
          </div>

        @endforeach
      </div>
  </div>
@endsection