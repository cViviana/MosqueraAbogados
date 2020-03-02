<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ubicacion;

class ubicacionController extends Controller
{
    public function guardarControlador(Request $request){
        $objUbicacion = new Ubicacion($request->all());
        $objUbicacion->guardar($objUbicacion);
        $men = "La ubicacion se guardo de forma exitosa";
        return view('administrador.agregarUbicacion', [ "men" => $men] );
    }


    public function eliminarControlador(Request $request){
        $objUbicacion = $this->buscar($request->id);
        if($objUbicacion != null ){
          $objUbicacion->eliminar($objUbicacion);
          $men = "La ubicacion fue eliminada con satisfación";
          return view('administrador.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
        }else{
          $men="El identificador ingresado es invalido ";
          return view('administrador.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
        }      
    }

    public function editarControlador(Request $request){
        $objUbicacion = $this->buscar($request->id);
        if( $objUbicacion != null ){
          $objUbicacion->fill($request->all());
          $objUbicacion->guardar($objUbicacion);
          $men = "se actualizaron los datos de forma exitosa";
          return view('administrador.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
        }else{
          $men="El identificador ingresado es invalido ";
          return view('admnistrador.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
        }
      }
    
    public function ubicacionControlador($id){
      $objUbicacion = $this->buscar($id);
      return view('administrador.editarUbicacion', ['ubicacion' => $objUbicacion] );
    }

    public function listarControlador(){
        return view('admnistrador.listarUbicaciones', ["ubicaciones" => $this->listar()] );
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
