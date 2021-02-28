<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AvisoContacto;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contactanos.contactus');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=> ['required', 'string',],
            'phone'=>['required', 'string', 'min:10'],
            'city'=>['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],  
            'comment'=>['required', 'string'],      
        ]);

        $correo=$request->email;

        $contacto =new Contacto;
        $contacto->name = $request->name;
        $contacto->phone = $request->phone;
        $contacto->city= $request->city;
        $contacto->email=$request->email;
        $contacto->comment = $request->comment;

        $contacto->save();

        Mail::to($correo)->send(new AvisoContacto($contacto));

        //Notificacion mensaje Admin
       /*  Mail::send('contactanos/avisocontacto',['contacto'=>$contacto],function ($message) use ($contacto)
        {
            $message->from('nataliacmartinezn@gmail.com','Notificaciones');
            $message->to('nataliacmartinezn@gmail.com');
            $message->subject('CONTACTANOS, mensaje recibido de'.$contacto->name);
        }); */

        // //notificación mensaje usuario
        // Mail::send('contactanos/avisocontacto',['contacto'=>$contacto],function ($message) use ($contacto)
        // {
        //     $message->from('nata9955@outlook.com','Notificaciones');
        //     $message->to($contacto->email);
        //     $message->subject('Datos recibidos de Rick&Morty Store');
        // });
        // //Devolver un mensaje al momento de enviar el correo funciona cómo el with->
        $request->session()->flash('success','Se ha enviado correctamente el form');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    
}

// MAIL_MAILER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=7a646fe66e1f87
// MAIL_PASSWORD=8509d657782859
// MAIL_ENCRYPTION=tls