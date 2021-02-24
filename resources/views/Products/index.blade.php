@extends('layouts.app')
@section('content')
	
  <section class="content">
    <div class="row">
      <div class="col-8 m-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="pull-left mb-4"><h3>Todos los productos</h3></div>
              <div class="pull-right">
                <div class="btn-group">
                    <a href="{{ route('product.create') }}" class=" mb-2 mr-3 btn btn-dark" >Agregar producto</a>
                    
                    <a href="{{ route('categorias.index') }}" class="mb-2 btn btn-dark" >Categorias</a>
                </div>
              </div>
              <div class="table-container">
                <table id="mytable" class="table text-center a table-striped table-hover">
                  <thead>
                    <th>ID</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Categoria</th>
                      <th>Status</th>
                      <th>Imagen</th>
                      <th>Acciones</th>
                  </thead>
                  <tbody class="align-middle">
                    @if(!$errors->count())  
                      @foreach($products as $prod)
                        <tr>
                          <td>{{$prod->id}}</td>
                          <td>{{$prod->Name}}</td>
                          <td>{{$prod->Price}}</td>	
                          <td>{{-- {{$categorias->}} --}}</td>
                          <td>{{$prod->Status}}</td>
                          <td>
                            <img class=" rounded mx-auto d-block" width="100" height="100" src="storage/{{ $prod->Image }}" alt="image">
                          </td>
                          <td>
                            <form  action="{{ route('product.destroy', $prod->id) }}" method="POST">
                              <a href="product/{{$prod->id}}" type="button" class="btn btn-success btn-sm">
                                <span class="material-icons">visibility</span>
                              </a>
  
                              <a href="/product/{{$prod->id}}/edit" type="button" class="btn btn-primary btn-sm">
                                <span class="material-icons">create</span>
                              </a>

                              @method ('DELETE')
                              <button href="product/{{$prod->id}}"  type="submit" class="btn btn-danger btn-sm">
                                <span class="material-icons">remove_circle</span>
                              </button>

                            </form>
                          </td>
                          
                        @endforeach
                        @else
                        <tr>
                          <td>No se han realizado registros.</td>
                        </tr> 
                    @endif  
                    <script src="{{asset('js/functions.js')}}"></script>

                  </tbody>
                </table>
                <div class="btn-group">
                  <a href="/" class=" mb-2 btn btn-secondary btn-sm" >Volver</a>
                </div>	
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</section>
@endsection
