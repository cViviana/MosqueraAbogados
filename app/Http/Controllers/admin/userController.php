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
            $mensajeNoRegistro = "Ya existe la identificación ". $request->numero ." del usuario.".$request->nombre;
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoRegistro', $mensajeNoRegistro);
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
                dd($mensajeEliminado);
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeEliminado', $mensajeEliminado);
            }else{
                $mensajeNoEliminado = "El usuario no se elimino de forma satisfactoria.";
                dd($mensajeNoEliminado);
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
            }
        }catch(Exception $e){
            $mensajeNoEliminado = "El usuario no pude ser eliminado ya que pertenece a un caso judicial de la firma.";
            dd($mensajeNoEliminado);
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
        }
    }

    public function editarControlador($cedula){
        $objUser = $this->buscar($cedula); //enviar el la ruta $objUser
        return view('administrador.usuarios.editarUsuario');
    }

    //userControlador sera un metodo en el cual nos permitira buscar y retornar
    //el usuario del cual se necesita informacion, ademas el metodo recibe un
    //parametro destino en este caso para saber si la información debe ir a
    //asingarRol o solo actualizar usuario
    public function userControlador($cedula,$destino){
        $objUser = $this->buscar($cedula);
        if($objUser != null){
            if($destino == 'asignarRol')
                return view('administrador.usuarios.rol', ['User' => $objUser] );
            if($destino == 'actualizar')
                dd('actualizar');
        }else{
            dd('el usuario no existe, no sea estupido');
        }
    }

    public function listarControlador(){
        return view('administrador.usuarios.listarUsuarios', ['Usuarios' => $this->listar()] );
    }

    public function asignarRol(Request $request){
        $objUser = $this->buscar($request->cedula);
        if($objUser != null){
            if($request->rol == 'Abogado jefe' || $request->rol == 'Abogado auxiliar' || $request->rol == 'Secretaria'){
                $objUser->asignarRol($request->cedula, $request->rol);
                $mensajeRolAsignado = "Al usuario ". $request->nombre ." se le fue asignado el rol ". $request->rol;
                dd($mensajeRolAsignado);
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolAsignado', $mensajeRolAsignado);
            }else{
                $mensajeRolErroneo = "El rol que desea asignar no existe";
                dd($mensajeRolErroneo);
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolErroneo', $mensajeRolErroneo);
            }
        }else{
            $mensajeRolNoAsignado = "La cedula del usuario no existe";
            dd($mensajeRolNoAsignado);
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
