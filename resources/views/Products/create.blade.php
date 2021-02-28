@extends('layouts.app')
@section('content')
	<section class="content">
        <div class="row">

            <div class="col-md-8 col-md-offset-2 ml-4">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title mb-4">Nuevo Producto</h3>
                    </div>
                    <div class="panel-body">					
                        <div class="table-container">
                            <form method="POST" action="{{ route('product.store') }}"  enctype="multipart/form-data">
                                {{ csrf_field() }}@csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" name="Name" placeholder="Nombre producto" id='Name'class='form-control input-sm @error("Name") is-invalid @enderror' />
											@error('Name')
												<span class='invalid-feedback' role='alert'>
													<p>
														{{$message}}
													</p>			
												</span>
											@enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <select id="categorias_id" name="categorias_id" class='form-control form-select custom-select input-sm text text-muted'>
                                            <option  value="">Seleccione una categoría</option>
                                            @foreach($categorias as $cat) 
                                                <option value="{{$cat->id}}">{{$cat->Name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                               
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select name="Status" id="Status" class="form-control input-sm form-select custom-select" >
												<option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                            </select>
                                            @error('Status')
												<span class='invalid-feedback' role='alert'>
													<p>
														{{$message}}
													</p>			
												</span>
											@enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <input type="text" name="Price" placeholder="Precio producto" id='Price'class='form-control input-sm @error("Price") is-invalid @enderror' />
											@error('Price')
												<span class='invalid-feedback' role='alert'>
													<p>
														{{$message}}
													</p>			
												</span>
											@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="Description" class="form-control input-sm @error('Price') is-invalid @enderror" placeholder="Descripción"></textarea>
                                    @error('Description')
                                        <span class='invalid-feedback' role='alert'>
                                            <p>
                                                {{$message}}
                                            </p>			
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">

                                    <div class="col mb-3 input-group-prepend">
                                        <input type="file" placeholder="Imagen" class="form-control " name="imagen_producto" id="inputGroupFile02">
                                    </div>	
                                </div> 
                    
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                                        <a href="/listproduct" class="btn btn-secondary btn-block" >Atrás</a>
                                    </div>	
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
	</section>
	@endsection