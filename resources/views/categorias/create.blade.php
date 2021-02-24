@extends('layouts.app') 
@section('content')

	<section class="content">
		<div class="row ml-4">
			<div class="col-md-8 ">
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>¡Error!</strong> Revise los campos obligatorios.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
		
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title ml-4"> Nueva Categoria</h3>
					</div>
					<div class="panel-body">					
						<div class="table-container">
							<form method="POST" class="needs-validations ml-4" action="{{ route('categorias.store') }}"  novalidate>
								@csrf
								<div class="row mt-3">
									<div class="col">
										<div class="form-group">
											
											<input type="text" name="Name" placeholder="Nombre Categoria" id='Name'class='form-control input-sm @error("Name") is-invalid @enderror' />
											@error('Name')
												<span class='invalid-feedback' role='alert'>
													<p>
														{{$message}}
													</p>			
												</span>
											@enderror

										</div>

										<div class="form-group">
											<textarea class="form-control input-sm" name="Description" id="Description" placeholder="Descripción"></textarea>
											@error('Description')
											<span class='invalid-feedback' role='alert'>
												<p>
													{{$message}}
												</p>			
											</span>
											@enderror
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<input type="submit"  value="Guardar" class="btn btn-success btn-block">
										<a href="{{ route('categorias.index') }}" class="btn  btn-secondary btn-block" >Volver</a>
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