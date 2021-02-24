@extends('layouts.app')
@section('content')
    

<html>
<head>
   
<div class="container">
    <H1 class="card-title my-3 text-center"> Gracias por tu Contacto</H1>

    <div class="card ">
        <h2 class="card-title p-4">El registro ha sido enviado exitosamente, pronto uno de nuestros representantes se pondrá en contácto.</h2>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b> Datos de registro: </b></li>
                <li class="list-group-item"><b> Nombre: </b> {{ $contacto->name }} </li>
                <li class="list-group-item"><b>Email: </b> {{ $contacto->email }} </li>
                <li class="list-group-item"><b>Ciudad: </b> {{ $contacto->city }} </li>
                <li class="list-group-item"><b>Teléfono: </b> {{ $contacto->phone }} </li>
                <li class="list-group-item"><b>Mensaje: </b> {{ $contact0->comment }} </li>
            </ul>
            <a href=""></a>
        </div>
    </div>

</div>

</div>
    
@endsection