<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificación de contacto</title>
</head>
<body>
    <div class="container card text-white bg-dark border-primary col-5">
        <h1 class="card-title my-3 text-center">
            <strong> Gracias por tu Contacto</strong>
        </h1>
        <div class="card">
          <h2 class="card-title p-4 ">El registro ha sido enviado exitosamente, pronto uno de nuestros representantes se pondrá en contácto.</h2>
          <div class="card-body mb-2">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong> Datos de registro: </strong></li>
                    <li class="list-group-item"><strong> Nombre: </strong> {{ $contacto['name'] }} </li>
                    <li class="list-group-item"><strong>Email: </strong> {{ $contacto['email'] }} </li>
                    <li class="list-group-item"><strong>Ciudad: </strong> {{ $contacto['city'] }} </li>
                    <li class="list-group-item"><strong>Teléfono: </strong> {{ $contacto['phone'] }} </li>
                    <li class="list-group-item"><strong>Mensaje: </strong> {{ $contacto['comment'] }} </li>
                </ul>
          </div>
        </div>
      
    </div>
</body>
