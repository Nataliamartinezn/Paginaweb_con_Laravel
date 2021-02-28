@extends('layouts.app')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col ml-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="pull-left mb-4"><h3> Categorias</h3></div>
              <div class="pull-right">
                <div class="btn-group">
                    <a href="{{ route('categorias.create') }}" class=" mb-2 btn btn-dark" >Agregar categoria</a>

                </div>
              </div>
              <div class="table-container">
                <table id="mytable" class="table text-center table-striped table-hover">
                  <thead class='thead-dark text-center'>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </thead>
                  <tbody>
                    @if(!$errors->count())  
                      @foreach($categoria as $cat)  
                        <tr>
                          <td>{{$cat->Name}}</td>
                          <td>{{$cat->Description}}</td>	
                          <td>                  
                            <a href="/categorias/{{$cat->id}}" type="button" class="btn btn-success btn-sm">
                              <span class="material-icons">visibility</span>
                            </a>

                            <a href="/categorias/{{$cat->id}}/edit" type="button" class="btn btn-primary btn-sm">
                              <span class="material-icons">create</span>
                            </a>

                            @method ('DELETE')
                                
                            <button type="submit" class="btn btn-danger delete-confirm btn-sm" data-name="{{$cat->Name}}">
                              <span class="material-icons">delete</span>
                            </button>
                        </td>
                        </tr>
                        @endforeach 
                        @else
                        <tr>
                          <td colspan="10">No se han realizado registros.</td>
                      </tr>
                    @endif
                  </tbody>
                </table>
                <div class="btn-group">
                  <a href="/listproduct" class=" mb-2 btn btn-secondary btn-sm" >Volver</a>
                </div>	
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</section>
@endsection
