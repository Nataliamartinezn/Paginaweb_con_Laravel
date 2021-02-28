@extends('layouts.app')
@section('content')
	<section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>!Error!</strong> Revise los campos obligatorios.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar categoria</h3>
                    </div>
                    <div class="panel-body">					
                        <div class="table-container">
                            <form method="POST" action="{{ route('categorias.update',$categoria->id) }}"  role="form">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="Name" id="Name" class="form-control input-sm" value="{{$categoria->Name}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="Description" class="form-control input-sm"  placeholder="Description">{{$categoria->Description}}</textarea>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                                        <a href="{{ route('categorias.index') }}" class="btn btn-info btn-light btn-block" >Volver</a>
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