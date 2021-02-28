@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col ">
          <div class="panel panel-default ml-4">
            <div class="panel-body">
              <div class="pull-left mb-4"><h3>Todos los productos</h3></div>
                <div class="pull-right">
                  <div class="btn-group">
                      <a href="{{ route('product.create') }}" class=" mb-2 mr-3 btn btn-dark" >Agregar producto</a>
                      
                      <a href="{{ route('categorias.index') }}" class="mb-2  d-grid gap-2 d-md-block btn btn-outline-dark" >Crear categoria</a>
                  </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="table-container">
                  <table id="mytable" class="table text-center a table-striped table-hover">
                    <thead>
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
                            <td>{{$prod->Name}}</td>
                            <td>{{$prod->Price}}</td>	
                            <td>{{$prod->categorias->Name}}</td>
                            <td>{{$prod->Status}}</td>
                            <td>
                              <img class=" rounded mx-auto d-block" width="100" height="100" src="storage/{{ $prod->Image }}" alt="image">
                            </td>
                            <td>
                              <form  action="{{ route('product.destroy', $prod->id) }}" method="POST">
                                @csrf
                                <a href="product/{{$prod->id}}" type="button" class="btn btn-success btn-sm">
                                  <span class="material-icons">visibility</span>
                                </a>
    
                                <a href="/product/{{$prod->id}}/edit" type="button" class="btn btn-primary btn-sm">
                                  <span class="material-icons">create</span>
                                </a>

                                @method ('DELETE')
                                
                                <button type="submit" class="btn btn-danger delete-confirm btn-sm" data-name="{{$prod->Name}}">
                                  <span class="material-icons">delete</span>
                                </button>
                              </form>
                            </td>
                            
                          @endforeach
                          @else
                          <tr>
                            <td>No se han realizado registros.</td>
                          </tr> 
                      @endif  

                    </tbody>
                  </table>
                  {!! $products->links() !!}<!--Botonespaginación-->
                  <div class=" btn-group">
                    <a href="{{route('product.index')}}" class=" mb-2 btn btn-secondary btn-sm" >Volver</a>
                  </div>	 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection