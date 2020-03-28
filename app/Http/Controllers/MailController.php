<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use Cinema\Http\Requests;
use Exception;

class MailController extends Controller
{
    public function postMail(Request $request){
        Mail::send('usuario-general.correo',$request->all(), function($msj){
            $msj->subject('Agendar cita');
            $msj->to('juansolarteo98@gmail.com');
        });
        $men = "El mensaje se envio de forma satisfactoria.";
        return view('usuario-general.inicio');
    }
}
