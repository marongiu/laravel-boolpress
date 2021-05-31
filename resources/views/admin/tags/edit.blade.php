@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Modifica categoria</h1>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <form class="col-md-6"action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post">

        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="name">Categoria</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name" placeholder="Inserisci categoria" value="{{$category->name}}">
            @error('name')
               <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
          </form>
        </div>
      </div>
    @endsection
