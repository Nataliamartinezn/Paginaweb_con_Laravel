@extends('layouts.app')
@section('content')
	<section class="content">
        <div class="row">

            <div class="col-md-8 col-md-offset-2 ml-5 mt-3">
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

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title mb-3">Editar producto</h3>
                    </div>
                    <div class="panel-body">					
                        <div class="table-container">
            
                            <form method="POST"  enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}">
                                {{ csrf_field() }}@csrf
                               @method('PUT')
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" name="Name" id="Name" class="form-control input-sm" value="{{$product->Name}}">
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
                                            <select  value="{{$product->categorias_id}}" id="categorias_id" name="categorias_id" class='form-control form-select custom-select input-sm text text-muted'>
                                            @foreach($categorias as $cat) 
                                                <option value="{{$cat->id}}"
                                                
                                            
                                                    >{{$cat->Name}}
                                                
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select name="Status" id="Status" class="form-control input-sm custom-select" value="{{$product->Status}}">
												<option  value="Activo" 
                                                @if ($product->Status== 'Activo')
                                                    selected
                                                @endif >Activo</option>
                                                <option value="Inactivo" 
                                                @if ($product->Status== 'Inactivo')
                                                    selected
                                                @endif >Inactivo</option>
                                                @error('Status')
												<span class='invalid-feedback' role='alert'>
													<p>
														{{$message}}
													</p>			
												</span>
											@enderror
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Price" id="Price" class="form-control input-sm" value="{{$product->Price}}">
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
                                    <textarea name="Description" class="form-control input-sm"  placeholder="Description">{{$product->Description}}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col mb-3">
                                        <input type="file"  placeholder="Imagen" class="form-control" name="imagen_producto">
                                        <input type="text" value="{{ $product->Image }}" class="form-control mt-2" readonly><br>
                                    </div>	
                                </div> 
                    
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                                        <a href="/listproduct" class="btn btn-secondary btn-block" >Volver</a>
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