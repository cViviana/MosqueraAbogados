<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tipo;
USE App\Http\Requests\valFormTipoDoc;
use Exception;

class tipoController extends Controller
{
  public function guardarControlador(valFormTipoDoc $request){
    $objTipo= new Tipo($request->all());
    $objTipo->guardar($objTipo);
    $men = "El tipo de documento de guardo de forma exitosa";
    return redirect()->route('crearTipoDocumento')->with('men', $men);
  }

  public function eliminarControlador($id){
    try{
      $objTipo = $this->buscar($id);
      if($objTipo != null ){
        $objTipo->eliminar($objTipo);
        $mensajeEliminado = "El tipo de documento fue eliminado con satisfación.";
        return redirect()->route('listarTiposDocumentos')->with(["men" => $mensajeEliminado, "TiposDocumentos" => $this->listar()]);
      }else{
        $mensajeNoEliminado="El identificador ingresado es invalido.";
        return redirect()->route('listarTiposDocumentos')->with(["men" => $mensajeNoEliminado, "TiposDocumentos" => $this->listar()]);
      }
    }catch(Exception $e){
      $mensajeNoEliminado="Este tipo de documento no se puede eliminar ya que esta siendo referenciado en un caso judicial.";
      return redirect()->route('listarTiposDocumentos')->with(["men" => $mensajeNoEliminado, "TiposDocumentos" => $this->listar()]);
    }
  }

  public function editarControlador(valFormTipoDoc $request){
    $objTipo = $this->buscar($request->id);
    if( $objTipo != null ){
      $objTipo->fill($request->all());
      $objTipo->guardar($objTipo);
      $men = "se actualizaron los datos de forma exitosa";
    }else
      $men="El identificador ingresado es invalido ";
    return redirect()->route('listarTiposDocumentos')->with(["men" => $men, "TiposDocumentos" => $this->listar()]);
  }

  public function tipoControlador(Request $request){
    $objTipo = $this->buscar($request->id);
    return view('administrador.tipo-documentos.editarTipoDocumento', ['tipo' => $objTipo]);
  }

  public function listarControlador(){
    return view('administrador.tipo-documentos.listarTiposDocumentos', ["TiposDocumentos" => $this->listar()] );
  }

  public function listar(){
    return Tipo::all();
  }

  //Esta función nos permitirá crear TIPO y llamar a la función de buscar TIPO 
  //por un solo camino y así evitar crearlos en cada función
  public function buscar($id){
    $objTipo = new Tipo();
    return $objTipo->buscar($id);
  }
}
