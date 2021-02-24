
@extends('layouts.app')
@section('content')
	<section class="content">
        <div class="row">

            <div class="d-flex justify-content-center">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title mb-4">Información categoria</h3>
                    </div>
                    <div class="row ">

                        <div class="form-group">
                            <strong>ID: {{$categoria->id}}</strong>
                        </div> 

                        <div class="form-group">
                            <strong value="">Nombre: {{$categoria->Name}}</strong>
                        </div>

                        <div class="form-group">
                            <strong>Descripcion: {{$categoria->Description}}</strong>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <a href="{{ route('categorias.index') }}" class="btn btn-secondary btn-lg" >Atrás</a>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
@endsection