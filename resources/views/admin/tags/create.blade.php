@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Creazione tag</h1>
      </div>
    </div>
    <div class="row justify-content-center ">
      <form class="col-md-6" action="{{route('admin.tags.store')}}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="name">Categoria</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name" placeholder="Inserisci categoria" value="{{ old('name') }}">
            @error('name')
               <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
@endsection
