<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tipo;

class tipoController extends Controller
{
  public function guardarControlador(Request $request)
  {
    $objTipo= new Tipo($request->all());
    $objTipo->guardar($objTipo);
    $men = "El tipo de documenot de guardo de forma exitosa";
    return view('administrador.tipoDocumento', [ "men" => $men] );
  }

  public function eliminarControlador(Request $request){
    $objTipo = $this->existe($request->id);
    if($objTipo != null ){
      $objTipo->eliminar($objTipo);
      $men = "El tipo de documento fue eliminado con satisfación";
      return view("administrador.eliminarTipoDocumetno", ["men" => $men] );
    }else{
      $men="El identificador ingresado es invalido ";
      return view("administrador.eliminarTipoDocumetno", ["men" => $men] );
    }      
  }

  public function editarControlador(Request $request){
    $objTipo = $this->existe($request->id);
    if( $objTipo != null ){
      $objTipo->fill($request->all());
      $objTipo->guardar($objTipo);
      $men = "se actualizaron los datos de forma exitosa";
      return view('administrador.editarTipoDocumento', ['men' => $men] );
    }else{
      $men="El identificador ingresado es invalido ";
      return view('administrador.editarTipoDocumento', ['men' => $men] );
    }
  }

  public function listarControlador(){
    $objTipo=Tipo::orderBy('id')->get();
    return view('admnistrador.listarTipoDocumento', ["listaTipo" => $objTipo] );
  }

  //Esta función nos permitirá crear TIPO y llamar a la función de buscar TIPO 
  //por un solo camino y así evitar crearlos en cada función
  public function existe($id){
    $objTipo = new Tipo();
    return $objTipo->buscar($id);
  }

  //HABLR CON FRONT QUE RECIBEN EN CASO DE BUSCAR EL ID


}
