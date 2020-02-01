<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

use Cinema\Http\Requests;

class MailController extends Controller
{
    public function postMail(Request $request){
        
        Mail::send('correo',$request->all(), function($msj){
            $msj->subject('Agendar cita');
            $msj->to('juansolarteo98@gmail.com');
        });
        return "envio correcto";
    }
}
