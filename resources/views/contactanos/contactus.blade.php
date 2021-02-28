@extends('layouts.app')
@section('content')

<div class=" row justify-content-center ">
  <div class="col-md-8">
    <div class="card align-items-center">
      <div class="card-header" style="background: rgba(255, 255, 255, 0)"><h3 class="text-center justify-center" style="color:#384fd1">{{ __('¡Contáctanos!')}}</h3>
        <div ><img  class="mt-3 rounded mx-auto d-block " width="300" height="250" src="{{__('../static/imagenes/logotipo.webp')}} " alt=""></div>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ route('contacto.store') }}">
          {{ csrf_field() }}@csrf

          <div class="row justify-content-center">
            <div class="col">
              <div class="form-group">
              <input type="text" name="name" placeholder="Nombre" id='name'class='form-control input-sm @error("name") is-invalid @enderror' />
              @error('name')
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
                <input name="phone" placeholder='Teléfono' id="phone" class="form-control input-sm " >
              </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <input type="text" name="city" placeholder="Ciudad" id='city' class='form-control input-sm @error("city") is-invalid @enderror' />
                @error('city')
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
                <input type="email" name="email" placeholder="E-mail" id='email' class='form-control input-sm @error("email") is-invalid @enderror' />
                @error('email')
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
              <textarea name="comment" class="form-control input-sm  @error('comment') is-invalid @enderror" placeholder="Cuentanos lo que quieres decir" rows="4" ></textarea>
              @error('comment')
                  <span class='invalid-feedback' role='alert'>
                      <p>
                          {{$message}}
                      </p>			
                  </span>
              @enderror
          </div>

          <div class="row">
            <div required class="g-recaptcha ml-3" data-sitekey="6Lf8hGMaAAAAAIpEWbXdUzfu0H_bxzgxi17cXYOZ"></div>
          </div> 
      
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
                  <input type="submit"  value="Enviar" class="btn btn-primary  ">
                  <a href="{{ route('product.index') }}" class="btn btn-secondary " >Atrás</a>
              </div>	
          </div>

        <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
      </form> 
    </div>
  </div>
</div> 

{{-- .env

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}" --}}


@endsection
