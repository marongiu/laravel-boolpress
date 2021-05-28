@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Creazione post</h1>
      </div>
    </div>
    <div class="row justify-content-center ">
      <form class="col-md-6" action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">

        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Categoria</label>
          <select type="text" class="form-control  @error('title') is-invalid @enderror"  name="category_id">
            <option value="">Seleziona</option>

            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
            @error('title')
               <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>


        <div class="form-group">
          <label for="title">Titolo post</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror"  name="title" placeholder="Titolo" value="{{ old('title') }}">
            @error('title')
               <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>
        <div class="form-group">
          <label>Descrizione post</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="content" name="description"> {{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
              @enderror
        </div>

        <div class="form-group">
          <label>Carica immagine</label>
          <input type="file" class="form-control-file  @error('cover') is-invalid @enderror"  name="cover" value="{{ old('cover') }}">
            @error('cover')
                <small class="text-danger">{{ $message }}</small>
              @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
    </div>
  </div>
@endsection
