@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick&Morty Shop</title>
  
    
  </head>   
  <body>
    <main>
      <section class="bg bg-dark" id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active">
              <img src="{{asset('static/imagenes/banner.webp')}}" class="w-100"  alt="bannerslideshow">
            </div>
            <div class="carousel-item ">
              <img src="{{asset('static/imagenes/logotipo.webp')}}" class="m-auto d-block w-80" height="350" alt="bannerslideshow">
            </div>
            <div class="carousel-item">
              <img src="{{asset('static/imagenes/logorick-and-morty.png')}}" class=" m-auto d-block w-90" height="350" alt="bannerslideshow">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </button>
        </div>

        
      </section>

      <section class="productos mt-5" id="nuestros-productos" >
        <div class="titulo-productos"><h2>Nuestros Productos</h2></div>

        <div class="card">
          @foreach ($products as $prod)
          <div class="contenido-productos" >
            <div class="producto" >
              <a href="">
                <img src="{{url(Storage::url($prod->Image))}}" alt="Mug blanco">
              </a>
            </div>
            <div class="texto-ref" title="Mug Rick&Morty">
              <h6>{{$prod->Name}}</h6> 
              <p>{{$prod->Price}}</p> 
              <a href="">
                <span class="elementor-button-text">Ver más >></span><br>
              </a>
            </div>
          </div>
          @endforeach
         
          
        </div>    
      </section>   
    </main>
  </body>

</html>

@endsection
