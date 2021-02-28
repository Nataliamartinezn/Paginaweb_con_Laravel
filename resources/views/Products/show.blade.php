
@extends('layouts.app')
@section('content')

<section>
    <div class=" d.flex justify-content-center" >
        <div class="titulo-productos text-center"><h2>Información Productos</h2></div>
        <div class="card col-12" style="background-color: #ffff">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img class="card-img" src="{{url(Storage::url($products->Image))}}" alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h2 class="card-title mb-3"><strong >{{$products->Name}}</strong></h2>
                        <p class="card-text"><strong>Precio:</strong> {{ $products->Price }}</p><strong></strong>
                        <p class="card-text"><strong>Estado:</strong> {{ $products->Status }}</p>
                        <p class="card-text"><strong>Descripción:</strong> {{ $products->Description }}</p>
                    </div>
                    <div class="m-3 d-flex justify-content-center">
                        @guest
                            <a class="btn btn-dark btn-block" href="{{route('product.index')}}#nuestros-productos" >Volver</a>                    
                        @else
                        <a class="btn btn-dark btn-block" href="/listproduct" class="nav-link" >Volver</a>

                        @endguest
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>

   
@endsection