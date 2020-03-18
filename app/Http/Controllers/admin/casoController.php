<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use App\User;
use App\Caso;
use App\Http\Controllers\Controller;
use App\Http\Requests\valFormRegCaso;
use Illuminate\Http\Request;
//use App\Http\Requests\valFormDoc;

class casoController extends Controller
{
    public function index(){
      $listaClientes = new Cliente;
      $Clientes = $listaClientes->listarPorRoll('cliente');
      $listaContraparte = new Cliente;
      $Contraparte = $listaContraparte->listarPorRoll('contraparte');
      $listaUsuarios = new User;
      $Usuarios = $listaUsuarios->listar();
      return view('administrador.procesos-judiciales.registrarProcesoJudicial', compact('Clientes','Contraparte','Usuarios') );
    }

    public function guardar(valFormRegCaso $request){
      // si verifica existe ya un caso con ese mismo radicado
      $auxCaso = $this->buscarControlador($request->radicado);
      //si no exite
      if( $auxCaso == null ){
          //se valida si exiten los clientes y si son diferentes
          if( $this->validarCliente($request->cliente,$request->contraparte) == true){
            //cumple que son diferente y existen
              //se valida si almenos un usuario principal existe
              if($this->validarUsuarios($request->abogadoPpal)==true){
                $objCaso = new Caso($request->all());
                $objCaso->guardar($objCaso,$request->contraparte,$request->cliente,$request->abogadoPpal,$request->abogadoAux);
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
    public function validarCliente($idCliente,$idContraparte){
      $objCliente = new Cliente;
      $objCliente = $objCliente->buscar($idCliente);
      $objContraparte = new Cliente;
      $objContraparte = $objContraparte->buscar($idContraparte);
      if($objContraparte != null && $objCliente != null &&  $objContraparte != $objCliente ){
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
      return $listaCasos=Caso::with(['clienteContraparte:numero,nombre','clienteCaso:numero,nombre','dirige:dir_cedula,nombre'])->get();
    }
    public function editarControlador(Request $request){

      $objCaso = $this->buscarControlador($request->radicado);
      if($objCaso != null){
          $objCaso->fill($request->all());
        /*$objCliente = $request->cliente;
        $objContraparte = $request->contraparte;
        if($objCliente )*/
        $objCaso->actualizar($objCaso, $request->cliente, $request->contraparte, $request->abogadoPpal, $request->abogadoAux);
        $men ="Actualizado caso con el radicado: ".$objCaso->radicado;
        return redirect()->route('listarCasos')->with('men',$men);
      }else{
        $men ="No existe un caso con el radicado: ".$caso. "para editar";
        return redirect()->route('listarCasos')->with('men',$men);
      }

    }

    public function editControlador($radicado){
        $caso = $this->buscarControlador($radicado);
        if($caso != null){
          $listaClientes = new Cliente;
          $Clientes = $listaClientes->listarPorRoll('cliente');
          $listaContraparte = new Cliente;
          $Contraparte = $listaContraparte->listarPorRoll('contraparte');
          $listaUsuarios = new User;
          $Usuarios = $listaUsuarios->listar();
            return view('administrador.procesos-judiciales.editarProcesoJudicial', compact('caso','Clientes','Contraparte','Usuarios'));
        }else{
          $men ="No existe un caso con el radicado: ".$caso. "para editar";
          return redirect()->route('listarCasos')->with('men',$men);
        }
    }

    public function buscarControlador($radicado){
      $objCaso = new Caso();
      return $objCaso->buscar($radicado);
    }
}
