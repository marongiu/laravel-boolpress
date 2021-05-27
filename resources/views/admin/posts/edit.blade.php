@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Modifica post</h1>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <form class="col-md-6"action="{{route('admin.posts.update', ['post' => $post->id])}}" method="post">

        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="title">Categoria</label>
          <select type="text" class="form-control  @error('title') is-invalid @enderror"  name="category_id">
            <option value="">Seleziona</option>

            @foreach ($categories as $category)
              <option value="{{$category->id}}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
            @endforeach
          </select>
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="title">Titolo post</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror"  name="title" placeholder="Titolo" value="{{ $post->title }}">
            @error('title')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label>Descrizione post</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="content" name="description"> {{ $post->description }} </textarea>
              @error('description')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
          </form>
        </div>
      </div>
    @endsection
