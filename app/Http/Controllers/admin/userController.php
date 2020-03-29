<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\valFormRegUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function guardarControlador(valFormRegUser $request){
        $mensajeNoRegistro = "";
        if($request->password_confirmation == $request->password){
            $aux = $this->buscar($request->cedula);
            if( $aux == null ){
                //asegurar contraseña
                $password = Hash::make($request->password);
                $request["password"]=$password;
                
                $objUser = new User($request->all());
                $objUser->guardar($objUser);
                $mensajeRegistro = "Éxito. ". $request->nombre ." con identificación ".
                            $request->cedula ." ha sido registrado.";
                return redirect()->route('registrarUsuario')->with('men', $mensajeRegistro);
            }else{
                $mensajeNoRegistro = "Ya existe la identificación ". $request->numero ." del usuario ".$request->nombre;
                return redirect()->route('registrarUsuario')->with('mensajeNoRegistro', $mensajeNoRegistro);
            }
        }else{
            $contraseñas_diferentes = "Las contraseñas ingresadas son diferentes";
            return redirect()->route('registrarUsuario')->with('contraseñas_diferentes', $contraseñas_diferentes);
        }
    }

    public function actualizarControlador(valFormRegUser $request){
        $objUser = $this->buscar($request->cedula);
        $mensajeNoActualizacion = "";
        if($objUser != null){            
            $objUser->fill($request->all());
            $objUser->guardar($objUser);
            $mensajeActualizacion = "El usuario se actualizó de forma satisfactoria.";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('men', $mensajeActualizacion);
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
                $eliminado = $objUser->eliminar($objUser);
                if($eliminado){
                    $mensajeEliminado = "El usuario se eliminó de forma satisfactoria.";
                    return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('men', $mensajeEliminado);
                }else{
                    $mensajeNoEliminado = "El usuario ".$cedula." es el único abogado jefe, por lo tanto, no puede ser eliminado";
                    return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
                }

            }else{
                $mensajeNoEliminado = "El usuario no se eliminó de forma satisfactoria.";
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
            }
        }catch(Exception $e){
            $mensajeNoEliminado = "El usuario no puede ser eliminado ya que pertenece a un caso judicial de la firma.";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoEliminado', $mensajeNoEliminado);
        }
    }

    //eliminar metodo
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
            if($destino == 'asignarRol'){
                if(auth()->user()->can('crear'))
                    return view('administrador.usuarios.rol', ['User' => $objUser] );
                else
                    return redirect()->route('accesoDenegado');
            }

            if($destino == 'actualizar')
                return view('administrador.usuarios.editarUsuario', ['User' => $objUser] );
        }else{
            $mensajeNoExiste = "El usuario no existe";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeNoExiste', $mensajeNoExiste);
        }
    }

    public function listarControlador(){
        return view('administrador.usuarios.listarUsuarios', ['Usuarios' => $this->listar()] );
    }

    public function asignarRol(Request $request){
        $objUser = $this->buscar($request->cedula);
        if($objUser != null){
            if($request->rol == 'Abogado jefe' || $request->rol == 'Abogado auxiliar' || $request->rol == 'Secretaria'){
                if($objUser->existeRestriccionJefe($objUser)){
                    $objUser->asignarRol($request->cedula, $request->rol);
                    $mensajeRolAsignado = "Al usuario ". $request->nombre ." se le fue asignado el rol ". $request->rol;
                    return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('men', $mensajeRolAsignado);
                }
                else{
                    $mensajeRolNoAsignado = "El usuario ".$request->cedula." es el único abogado jefe, por lo tanto, no puede ser modificado";
                    return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolNoAsignado', $mensajeRolNoAsignado);
                }
            }else{
                $mensajeRolErroneo = "El rol que desea asignar no existe";
                return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolErroneo', $mensajeRolErroneo);
            }
        }else{
            $mensajeRolNoAsignado = "La cédula del usuario no existe";
            return redirect()->route('listarUsuarios', ['Usuarios' => $this->listar()])->with('mensajeRolNoAsignado', $mensajeRolNoAsignado);
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

    public function cambioContraseña(Request $request){

        //buscamos el usuario que tiene la sesión actual
        $objUser = $this->buscar(auth()->user()->cedula);

        //validar que las contraseña antigua sea la correcta
        if( Hash::check( $request->passwordOld, $objUser->password) ){
            //comparar las contraseñas nuevas
            if( $request->passwordNew == $request->password_confirmation ){
                $password = Hash::make($request->passwordNew);
                $objUser->password = $password;
                $objUser->guardar($objUser);
                $mensajeActualizacion = "Éxito. La contraseña se actualizó de forma satisfactoria.";
                return redirect()->route('cambioContrasenia')->with('men', $mensajeActualizacion);
            }else{
                $mensajeDiferentes = "Las contraseñas no coinciden.";
                return redirect()->route('cambioContrasenia')->with('mensajeDiferentes', $mensajeDiferentes);
            }
        }
        $mensajeContraseñaIncorrecta = "La contraseña antigua ingresada no es correcta.";
        return redirect()->route('cambioContrasenia')->with('mensajeContraseñaIncorrecta', $mensajeContraseñaIncorrecta);
    }

}
