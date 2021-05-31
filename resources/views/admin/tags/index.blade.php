@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a class="btn btn-primary"href="{{route('admin.categories.create')}}">Crea Categoria</a>
      </div>
    </div>
      <div class="row justify-content-center">
        @foreach ($categories as $category)
          <div class="col-md-4">
              <div class="card mt-4">
                  <div class="card-header text-center bg-info">
                    <h5 class="text-light text-capitalize">{{$category->name}}</h5>
                  </div>

                  <div class="card-body">


                      <div class="controller d-flex justify-content-around align-items-center mt-5">
                        <a class="btn btn-warning" href="{{route('admin.categories.edit', ['category' => $category->id])}}">Modifica</a>
                        <a class="btn btn-primary" href="{{route('category.index', ['slug' => $category->slug])}}">Visualizza</a>
                        <form class="text-primary" action="{{route('admin.categories.destroy', ['category' => $category->id])}}" method="post">
                          @csrf
                          @method('DELETE')
                          <input class="btn btn-danger" type="submit" name="" value="Elimina">
                        </form>

                      </div>
                  </div>
              </div>
          </div>

        @endforeach
      </div>
  </div>
@endsection
