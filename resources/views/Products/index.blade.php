@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick&Morty Shop</title>
  
    
  </head>   
  <body class="bg bg-dark " >
    <main >
      <section  id="home">
       
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('static/imagenes/banner.webp')}}" class="w-100"  alt="bannerslideshow">
            </div>
            <div class="carousel-item">
              <img src="{{asset('static/imagenes/logotipo.webp')}}" class="m-auto d-block w-80" height="350" alt="bannerslideshow">
            </div>
            <div class="carousel-item">
              <img src="{{asset('static/imagenes/logorick-and-morty.png')}}" class=" m-auto d-block w-90" height="350" alt="bannerslideshow">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
      </section>
      <section class="productos mt-5" id="nuestros-productos" >
        <div class="titulo-productos"><h2>Nuestros Productos</h2></div>

        <div class="card">
          @foreach ($products as $prod)
          <div class="contenido-productos" >
            <div class="producto" >
              <a href="/product/{{$prod -> id}}">
                <img src="{{url(Storage::url($prod->Image))}}" alt="Mug blanco">
              </a>
            </div>
            <div class="texto-ref" title="Mug Rick&Morty">
              <h5><strong>{{$prod->Name}}</strong></h5> 
            <strong> <p>{{$prod->Price}} COP</p></strong> 
              <a href="/product/{{$prod -> id}}">
                <span class="elementor-button-text">Ver más >></span><br>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </section>
    </main>
  </body>
@endsection
