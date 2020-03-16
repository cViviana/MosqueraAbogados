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
      // si verifica existe ya un caso con ese mismo radicado
      $caso = new Caso;
      $auxCaso = $caso->buscar($request->radicado);
      //si no exite
      if( $auxCaso == null ){
          //se valida si exiten los clientes y si son diferentes
          if( $this->validarCliente($request->demandante,$request->demandado) == true){
            //cumple que son diferente y existen
              //se valida si almenos un usuario principal existe
              if($this->validarUsuarios($request->abogadoPpal)==true){
                $objCaso = new Caso($request->all());
                $objCaso->guardar($objCaso,$request->demandante,$request->demandado,$request->abogadoPpal,$request->abogadoAux);
                $men = "Caso registrado correctamente";
                return redirect()->route('registrarCaso')->with('men',$men,'tipo',1);
              }else{
                $men = "No exite el abogado principal";
                return redirect()->route('registrarCaso')->with('men',$men,'tipo',0);
              }
          }else{
            $men ="los clientes son iguales";
            return redirect()->route('registrarCaso')->with('men',$men,'tipo',0);
          }
      }else{
        $men = "El caso con ese radicado ya existe";
          return redirect()->route('registrarCaso')->with('men',$men,'tipo',0);
      }
    }
    public function validarCliente($idDemandante,$idDemandado){

      $objDemandante = new Cliente;
      $objDemandante = $objDemandante->buscar($idDemandante);
      $objDemandado = new Cliente;
      $objDemandado = $objDemandado->buscar($idDemandado);
      if($objDemandado != null && $objDemandante != null &&  $objDemandado != $objDemandante ){
        return true;
      }else {
        return false;
      }
    }
    public function validarUsuarios($idAbogadoPpal){
      $objAbogadoPpal = new User;
      $objAbogadoPpal = $objAbogadoPpal->buscar($idAbogadoPpal);
      //validar que exista el abogado jefe y que enrealidad sea jefe
    if(  $objAbogadoPpal != null /*validar que sea un jefe*/ ){
        // si exite el abogado jefe , se verifica si tiene aux o no
        return true;
      }else {
        return false; //
      }
    }

    public function listarControlador(){
        return view('administrador.procesos-judiciales.listarProcesoJudicial', ['Casos' => $this->listar()] );
    }

    //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
    public function listar(){
        //$listaCasos = Caso::with(['clienteDemandante','clienteDemandado','dirige'])->get();
        //d($listaCasos);
        return $listaCasos=Caso::all();
        //return $listaCasos;
    }
}
