<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class documento_controller extends Controller
{
  public function guardarControlador(Request $request)
   {
     //Parametros Documento, tipo,ubicacion
     $objTipo= new Documento($request->all());
     $objTipo->guardar($objTipo);
     guardar(Documento $doc , $tipo, $ubicacion)
   }
}
