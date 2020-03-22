<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ubicacion;
use App\Http\Requests\valFormRegUbi;
use Exception;

class ubicacionController extends Controller
{
    public function guardarControlador(valFormRegUbi $request){
      $objUbicacion = new Ubicacion($request->all());
      if(!$objUbicacion->existeUbicacion($request)){
        $objUbicacion->guardar($objUbicacion);
        $mensajeRegistro = "La ubicación se guardó de forma exitosa.";
        return view('administrador.ubicacionFisica.listarUbicaciones', [ "mensajeRegistro" => $mensajeRegistro, 'ubicaciones' => $this->listar() ] );
      }else{
        $mensajeNoRegistro = "Esta ubicación ya existe.";
        return view('administrador.ubicacionFisica.listarUbicaciones', [ "mensajeNoRegistro" => $mensajeNoRegistro, 'ubicaciones' => $this->listar() ] ); 
      }
    }

    public function eliminarControlador($id){
      try{
        $objUbicacion = $this->buscar($id);
        if($objUbicacion != null ){
          $objUbicacion->eliminar($objUbicacion);
          $mensajeEliminado = "La ubicación fue eliminada con satisfacción.";
          return view('administrador.ubicacionFisica.listarUbicaciones', ['mensajeEliminado' => $mensajeEliminado, 'ubicaciones' => $this->listar()] );
        }else{
          $mensajeNoEliminado="El identificador ingresado es invalido.";
          return view('administrador.ubicacionFisica.listarUbicaciones', ['mensajeNoEliminado' => $mensajeNoEliminado, 'ubicaciones' => $this->listar()] );
        }
      }catch(Exception $e){
        $mensajeNoEliminado = "Esta ubicación no puede ser eliminada ya que hay docuementos que la referencian como almacenamiento.";
        return view('administrador.ubicacionFisica.listarUbicaciones', ['mensajeNoEliminado' => $mensajeNoEliminado, 'ubicaciones' => $this->listar()] );
      }

    }

    public function editarControlador(valFormRegUbi $request){
      $objUbicacion = $this->buscar($request->id);
      if(!$objUbicacion->existeUbicacion($request)){
        if( $objUbicacion != null){
          $objUbicacion->fill($request->all());
          $objUbicacion->guardar($objUbicacion);
          $mensajeActualizacion = "Se actualizaron los datos de forma exitosa.";
          return view('administrador.ubicacionFisica.listarUbicaciones', ['mensajeActualizacion' => $mensajeActualizacion, 'ubicaciones' => $this->listar()] );
        }else{
          $mensajeNoActualizacion="El identificador ingresado es invalido.";
          return view('administrador.ubicacionFisica.listarUbicaciones', ['mensajeNoActualización' => $mensajeNoActualizacion, 'ubicaciones' => $this->listar()] );
        }
      }
      else{
        $men="Esta ubicación ya existe";
        return view('administrador.ubicacionFisica.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
      }
    }
    
    public function ubicacionControlador(Request $request){
      $objUbicacion = $this->buscar($request->id);
      return view('administrador.ubicacionFisica.editarUbicacion', ['ubicacion' => $objUbicacion] );
    }

    public function listarControlador(){
      return view('administrador.ubicacionFisica.listarUbicaciones', ["ubicaciones" => $this->listar()] );
    }

    public function listar(){
      return $listaUbicaciones=Ubicacion::all();
    }

    //Esta función nos permitirá crear UBICACION y llamar a la función de buscar UBICACION
    //por un solo camino y así evitar crearlos en cada función
    public function buscar($id){
        $objUbicacion = new Ubicacion();
        return $objUbicacion->buscar($id);
    }
}
