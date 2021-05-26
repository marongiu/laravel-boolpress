@extends('layouts.app')

@section('main')
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Creazione post</h1>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <form action="{{route('admin.posts.store')}}">

        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Titolo post</label>
          <input type="text" class="form-control"  placeholder="Titolo">
        </div>
        <div class="form-group">
          <label>Descrizione post</label>
          <textarea class="form-control" name="name" rows="8" cols="80"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
    </div>
  </div>
@endsection
