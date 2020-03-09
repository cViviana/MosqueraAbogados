<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class casoController extends Controller
{
    public function index(){
      $listaClientes = new Cliente;
      $Clientes = $listaClientes->listar();
      $listaUsuarios = new User;
      $Usuarios = $listaUsuarios->listar();
      return view('administrador.procesos-judiciales.registrarProcesoJudicial', compact('Clientes','Usuarios') );
    }

    public function guardar(Request $request){
      /*$aux = $this->buscar($request->numero);
      if( $aux == null ){
          $objCliente = new Cliente($request->all());
          $objCliente->guardar($objCliente);
          $men = "El cliente se creo de forma satisfactoria";
          return view('administrador.clientes.registrarCliente', ['men' => $men] );
      }else{
          $men = "El identificador del cliente ya existe";
          return view('administrador.clientes.registrarCliente', ['men' => $men] );
      }*/
    }
}
