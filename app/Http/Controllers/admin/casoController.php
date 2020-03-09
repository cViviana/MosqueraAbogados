<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Requests\valFormDoc;

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
      // si verifica existe ya un caso con ese mismo radicado
      $auxCaso = $this->buscar($request->radicado);
      //si no exite
      if( $auxCaso == null ){
          //debo guardar el demandate y demandado y los retonor
          $objDemandante = new Cliente;
          $objDemandante->buscar($request->demandante);
          $objDemandando = new Cliente;
          $objDemandando->buscar($request->demandado);
          $objAbogadoPpal = new User;
          $objAbogadoPpal->buscar($request->abogadoPpal);
          $objAbogadoAux = new User;
          $objAbogadoAux->buscar($request->abogadoAux);
          //if($objDemandante != null  && ) ojo!!
          $objCaso = new Caso($request->all());
          $objCaso->guardar($objCaso,$objDemandando,$objDemandante,$objAbogadoPpal,$objAbogadoAux);
          $men = "Caso registrado correctamente";
          return view('administrador.procesos-judiciales.registrarProcesoJudicial', ['men' => $men] );
      }else{
          $men = "El caso con ese radicado ya existe";
          return view('administrador.procesos-judiciales.registrarProcesoJudicial', ['men' => $men] );
      }
    }
}
