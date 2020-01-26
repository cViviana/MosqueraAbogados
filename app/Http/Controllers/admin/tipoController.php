<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tipo;

class tipoController extends Controller
{

     public function guardarControlador(Request $request)
    {
      $objTipo= new Tipo($request->all());
      $objTipo->save();

      flash("se agrego , genial ")->success();
      return redirect()->route('crearTipodocumento');
    }
}
