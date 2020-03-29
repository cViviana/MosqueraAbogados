<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use Cinema\Http\Requests;
use Exception;

class MailController extends Controller
{
    public function postMail(Request $request){
        try{
            Mail::send('usuario-general.correo',$request->all(), function($msj){
                $msj->subject('Agendar cita');
                $msj->to('abogados.firma.mosquera@gmail.com');
            });
            $mensaje = "El mensaje se envió de forma satisfactoria.";
            return redirect()->route('contacto')->with('mensaje', $mensaje);
        }catch(Exception $e){
            $mensaje = "No se envió el correo, por el momento nuestro canal de comunicación esta en mantenimiento";
            return redirect()->route('contacto')->with('mensaje', $mensaje);
        }

    }
}
