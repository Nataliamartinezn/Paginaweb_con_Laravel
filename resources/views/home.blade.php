@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick&Morty Shop</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="icon" href="{{asset('../static/imagenes/Titleicon.ico')}}">
  </head>   

  <body>
    <main>
      <section class="productos mt-auto" id="nuestros-productos" >
        <div class="titulo-productos"><h2>Nuestros Productos</h2></div>

        <div class="card">

          <div class="contenido-productos" >
            <div class="producto" >
              <a href="">
                <img src="{{asset('static/imagenes/articulo1.jpeg')}}" alt="Mug blanco">
              </a>
            </div>
            <div class="texto-ref" title="Mug Rick&Morty">
              <h6>Mug Rick&Morty Blanco</h6> 
              <p>COP $15.000</p> 
              <a href="../Primer_Class/products-info/infoproducts.html#articulo1">
                <span class="elementor-button-text">Ver más >></span><br>
              </a>
            </div>
          </div>
          

          <div class="contenido-productos" >
              <div class="producto" >
                <img src="{{asset('static/imagenes/articulo2.jpg')}}" alt="Funko Mr.Meeseeks">
            </div>
            <div class="texto-ref">
              <h6>FunkoPOP! Mr.Meeseeks</h6> 
              <p>COP $15.000</p>  
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo3.jpg')}}" alt="Camiseta de Morty">
            </div>
            <div class="texto-ref">
              <h6>Camiseta de Morty</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>
          
          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo4.jpg')}}" alt="Funko Beth Smith">
            </div>
            <div class="texto-ref">
              <h6>FunkoPOP! Sad Beth</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo5.jpeg')}}" alt="Funko Mr.Poopybutthole">
            </div>
            <div class="texto-ref">
              <h6>Funko Mr.Poopybutthole</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo6.png')}}" alt="You son of a bitch I'm in">
            </div>
            <div class="texto-ref">
              <h6>Sticker Morty Quote</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo7.jpeg')}}" alt="Funko Squanchy">
            </div>
            <div class="texto-ref">
              <h6>FunkoPOP! Squanchy</h6> 
              <p>COP $15.000</p>
              <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo8.jpeg')}}" alt="Mug Rick Quote">
            </div>
            <div class="texto-ref">
              <h6>Mug Blanco Rick Sanchez</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo9.jpg')}}" alt="Hoodie BirdPerson">
            </div>
            <div class="texto-ref">
              <h6>Hoodie Negro BirdPerson</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo10.jpeg')}}" alt="FunkoPOP Warrior Summer">
            </div>
            <div class="texto-ref">
              <h6>Funko Warrior Summer</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo11.jpeg')}}" alt="Hoodie Wubba Lubba Dub Dub">
            </div>
            <div class="texto-ref">
              <h6>Hoodie Blanco Rick</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>

          <div class="contenido-productos" >
            <div class="producto" >
              <img src="{{asset('static/imagenes/articulo12.jpg')}}" alt="Morty Funko POP!">
            </div>
            <div class="texto-ref">
              <h6>FunkoPOP! Morty Smith</h6> 
              <p>COP $15.000</p>
                <span class="elementor-button-text">Ver más >></span><br>
            </div>
          </div>


        </div>    
      </section>   
    </main>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>

    {{-- Mi dshborad <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Ha iniciado sesión!') }}
                </div>
            </div>
        </div> --}}
@endsection
