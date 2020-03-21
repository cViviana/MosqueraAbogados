<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Exception;

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
            $mensajeNoRegistro = "Ya existe la identificación ". $request->numero ." del usuario.".
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
            $mensajeActualizacion = "El usuario se actualizó de forma satisfactoria.";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeActualizacion', $mensajeActualizacion);
        }else{
            $mensajeNoActualizacion = "El identificador del usuario no existe.";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoActualizacion', $mensajeNoActualizacion);
        }
    }

    public function eliminarControlador($cedula){
        try{
            $objUser = $this->buscar($cedula);
            $mensajeNoEliminado = "";
            if ($objUser != null){
                $objUser->eliminar($objUser);
                $mensajeEliminado = "El usuario se elimino de forma satisfactoria.";
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeEliminado', $mensajeEliminado);
            }else{
                $mensajeNoEliminado = "El usuario no se elimino de forma satisfactoria.";
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
            }
        }catch(Exception $e){
            $mensajeNoEliminado = "El usuario no pude ser eliminado ya que pertenece a un caso judicial de la firma.";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
        }
    }

    public function editarControlador($cedula){
        $cedula = $this->buscar($cedula);
        return view('administrador.usuarios.editarUsuario');
    }

    public function listarControlador(){
        return view('administrador.usuarios.listarUsuarios', ['Usuarios' => $this->listar()] );
    }

    public function asignarRol($cedula,$rol){
        $objUser = $this->buscar($cedula);
        if($objUser != null){
            if($rol == 'Abogado jefe' || $rol == 'Abogado auxiliar' || $rol == 'Secretaria'){
                $objUser->asignarRol($cedula, $rol);
                $mensajeRolAsignado = "Al usuario con cedula". $cedula ."se le fue asignado el rol ". $rol;
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolAsignado', $mensajeRolAsignado);
            }else{
                $mensajeRolErroneo = "El rol que desea asignar no existe";
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolErroneo', $mensajeRolErroneo);
            }
        }else{
            $mensajeRolNoAsignado = "La cedula del usuario no existe";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolAsignado', $mensajeRolNoAsignado);
        }
    }

    //este metodo fue separado de listarControlar para poder reenviar los usuarios cuando se eliminen
    public function listar(){
      $usuarios = new User();
      return $usuarios->listar();
    }

    //este metodo fue creado para tener solo una cracion de usuario y un camino para el FIND
    public function buscar($cedula){
        $objUser = new User();
        return $objUser->buscar($cedula);
    }

}
