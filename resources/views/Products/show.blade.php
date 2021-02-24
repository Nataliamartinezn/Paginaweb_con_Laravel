
@extends('layouts.app')
@section('content')
	<section class="content">
        <div class="row">

            <div class="d-flex justify-content-center">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title mb-4">Información Producto</h3>
                    </div>
                    <div class="row ">

                        <div class="form-group">
                            <strong>ID: {{$products->id}}</strong>
                        </div> 

                        <div class="form-group">
                            <strong value="">Nombre: {{$products->Name}}</strong>
                        </div>

                        <div class="form-group">
                            <strong>Descripcion: {{$products->Description}}</strong>
                        </div>

                        <div class="form-group">
                            <strong>Precio: {{$products->Price}}</strong>
                        </div>

                        <div class="form-group">
                            <strong>Estado: {{$products->Status}}</strong>
                        </div>

                        <div class="form-group">
                            <strong>Archivo: {{$products->Image}}</strong>
                            <img class="rounded mx-auto d-block" width="100" height="100" src="storage/{{ $products->Image}}" alt="image">
                        </div> 
                    
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a href="{{ route('product.index') }}" class="btn btn-secondary btn-lg" >Atrás</a>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
@endsection