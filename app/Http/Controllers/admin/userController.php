<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function guardarControlador(Request $request){
        $mensajeNoRegistro = "";
        $aux = $this->buscar($request->cedula);
        if( $aux == null ){
            $objUser = new User($request->all());
            $objUser->guardar($objUser);
            $mensajeRegistro = "Éxito. ". $request->nombre ." con identificación ".
                        $request->cedula ." ha sido registrado.";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRegistro', $mensajeRegistro);
        }else{
            $mensajeNoRegistro = "Ya existe la identificación ". $request->numero ." del usuario ".
                        $request->nombre;
            return redirect()->route('registrarUsuario')->with('mensajeNoRegistro', $mensajeNoRegistro);
        }
    }

    public function actualizarControlador(Request $request){
        $objUser = $this->buscar($request->numero);
        $mensajeNoActualizacion = "";
        if($objUser != null){
            $objUser->fill($request->all());
            $objUser->guardar($objUser);
            $mensajeActualizacion = "El usuario se actualizó de forma satisfactoria";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRegistro', $mensajeActualizacion);
        }else{
            $mensajeNoActualizacion = "El identificador del usuario no existe";
            return redirect()->route('listarClientes', ['Clientes' => $this->listar()])->with('mensajeNoActualizacion', $mensajeNoActualizacion);
        }
    }

    public function eliminarControlador($cedula){
        $objUser = $this->buscar($cedula);
        $mensajeNoEliminado = "";
        if ($objUser != null){
            $objUser->eliminar($objUser);
            $mensajeEliminado = "El usuario se elimino de forma satisfactoria";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeEliminado', $mensajeEliminado);
        }else{
            $mensajeNoEliminado = "El usuario no se elimino de forma satisfactoria";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
        }
    }

    public function editarControlador($cedula){
        $cedula = $this->buscar($cedula);
        return view('administrador.usuarios.editarDatosUsuario');
    }

    public function listarControlador(){
        return view('administrador.clientes.listarClientes', ['Clientes' => $this->listar()] );
    }

    public function asignarRol(){
        //...
    }

    //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
    public function listar(){
      $usuarios = new User();
      dd($usuarios->listar());
      return $usuarios->listar();
    }

    //este metodo fue creado para tener solo una cracion de cliente y un camino para el FIND
    public function buscar($cedula){
        $objCliente = new Cliente();
        return $objCliente->buscar($cedula);
    }

}
