<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ubicacion;
use App\Http\Requests\valFormRegUbi;

class ubicacionController extends Controller
{
    public function guardarControlador(valFormRegUbi $request){
      $objUbicacion = new Ubicacion($request->all());
      if(!$objUbicacion->existeUbicacion($request)){
        $objUbicacion->guardar($objUbicacion);
        $men = "La ubicacion se guardo de forma exitosa";
      }else
        $men = "Esta ubicación ya existe";
      dd($men);
      return view('administrador.ubicacionFisica.agregarUbicacion', [ "men" => $men] );
    }

    public function eliminarControlador($id){
      $objUbicacion = $this->buscar($id);
      if($objUbicacion != null ){
        $objUbicacion->eliminar($objUbicacion);
        $men = "La ubicacion fue eliminada con satisfación";
      }else
        $men="El identificador ingresado es invalido ";
      return view('administrador.ubicacionFisica.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
    }

    public function editarControlador(valFormRegUbi $request){
      $objUbicacion = $this->buscar($request->id);
      if( $objUbicacion != null ){
        $objUbicacion->fill($request->all());
        $objUbicacion->guardar($objUbicacion);
        $men = "se actualizaron los datos de forma exitosa";
      }else
        $men="El identificador ingresado es invalido ";
      return view('administrador.ubicacionFisica.listarUbicaciones', ['men' => $men, 'ubicaciones' => $this->listar()] );
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
