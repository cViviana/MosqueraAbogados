<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use App\User;
use App\Caso;
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
      //dd($request);
      // si verifica existe ya un caso con ese mismo radicado
      $caso = new Caso;
      $auxCaso = $caso->buscar($request->radicado);
      //si no exite
      if( $auxCaso == null ){
          //debo guardar el demandate y demandado y los retonor
          $objDemandante = new Cliente;
          $objDemandante = $objDemandante->buscar($request->demandante);
          $objDemandado = new Cliente;
          $objDemandado = $objDemandado->buscar($request->demandado);
          $objAbogadoPpal = new User;
          $objAbogadoPpal = $objAbogadoPpal->buscar($request->abogadoPpal);
          $objAbogadoAux = new User;
          $objAbogadoAux = $objAbogadoAux->buscar($request->abogadoAux);
          //if($objDemandante != null  && ) ojo!!
          $objCaso = new Caso($request->all());
          $objCaso->guardar($objCaso,$objDemandado,$objDemandante,$objAbogadoPpal,$objAbogadoAux);
          $men = "Caso registrado correctamente";
          return view('administrador.procesos-judiciales.registrarProcesoJudicial', ['men' => $men] );
      }else{
          $men = "El caso con ese radicado ya existe";
          return view('administrador.procesos-judiciales.registrarProcesoJudicial', ['men' => $men] );
      }
    }

    public function listarControlador(){
        return view('administrador.procesos-judiciales.listarProcesoJudicial', ['Casos' => $this->listar()] );
    }

    //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
    public function listar(){
        return $listaCasos = Caso::all();
    }
}
