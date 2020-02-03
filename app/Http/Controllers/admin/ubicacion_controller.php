<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;

class ubicacion_controller extends Controller
{
    public function guardarControlador(Request $request){
     $objUbicacion= new Ubicacion($request->all());
     $objUbicacion->guardar($objUbicacion);
    }
}
