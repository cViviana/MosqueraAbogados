<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ubicacion;
use App\Tipo;
use App\Caso;
use App\Documento;

class documento_controller extends Controller
{
  public function index(){
    $ubicacion = new Ubicacion;
    $ListaUbicaciones = $ubicacion->listar();
    $tipo = new Tipo;
    $ListaTipos = $tipo->listar();
    $caso = new Caso;
    $ListaCasos = $caso->listar();
    return view('administrador.procesos-judiciales.subirDocumento', compact('ListaUbicaciones','ListaTipos','ListaCasos') );
  }

  public function guardarControlador(Request $request)
   {
     //Verificar el radicado, el tipo y la ubicación
     $casoAux = new Caso;
     $caso = $casoAux->buscar($request->radicado_doc);
     //busca el tipo de documento
     $tipoAux = new Tipo;
     $tipo = $tipoAux->buscar($request->tipo_id);
     //busca si existe la ubicaciónes
     $ubicacionAux = new Ubicacion;
     $ubicacion = $ubicacionAux->buscar($request->ubicacion_id);

     if($tipo!=null and $ubicacion!=null and $caso != null){
       //Llamamos al guardar del modelo para las asociaciones y save
       $objDocumento = new Documento($request->all());
       //dd($objDocumento);
       $guardar = $objDocumento->guardar($objDocumento,$caso->radicado,$tipo->id,$ubicacion->id,$request);
       if($guardar == true){
         $men = "Documento guardado correctamente";
         return redirect()->route('subirDocumento')->with('men',$men);
       }else{
            $men = "Su documento no pudo ser guardado. Intente de nuevo.";
            return redirect()->route('subirDocumento')->with('men',$men);
       }
    }else{
         $men = "Ubicación Física - Tipo Documento - Radicado Incorrecto";
         return redirect()->route('subirDocumento')->with('men',$men);
    }

   }

   public function listarControlador($radicado){
       return view('administrador.procesos-judiciales.listarDocumentos', ['Documentos' => $this->listar($radicado)] );
   }

   //este metodo fue separado de listarControlar para poder reenviar los clientes cuando se eliminen
   public function listar($radicado){
      $doc = new Documento;
      $listaDocs = $doc->listarDocumentos($radicado);
      return $listaDocs;
   }
   public function listarPorRadicado(){
     $casos = new Caso;
     $ListaDocs = $casos->listar();
     return view('administrador.procesos-judiciales.documentos', compact('ListaDocs') );
   }
   public function verDocumento($id)
   {
     $doc = new Documento;
     $path = $doc->verDoc($id);
     return redirect($path);
   }

   public function editarDocumento($id)
   {
     $ubicacion = new Ubicacion;
     $ListaUbicaciones = $ubicacion->listar();
     $tipo = new Tipo;
     $ListaTipos = $tipo->listar();
     $caso = new Caso;
     $ListaCasos = $caso->listar();

     return view('administrador.procesos-judiciales.editarDocumento', compact('ListaUbicaciones','ListaTipos','ListaCasos','id') );
   }

   public function actualizarDocumento(Request $request)
   {
     $doc = new Documento;
     $doc->eliminar($request->id);
     $this->guardarControlador($request);
     $men = "Se actualizó correctamente el documento";
     return redirect()->route('listarDocumentosRadicado',$request->radicado_doc)->with('men',$men);
   }

   public function eliminarDocumento($id)
   {
      $doc = new Documento;
      $doc = $doc->buscar($id);
      $nombre = $doc->nombreArchivo;
      $radicado = $doc->radicado_doc;
      $doc->eliminar($id);
      $men = "Se eliminó correctamente el documento ".$nombre;
      return redirect()->route('listarDocumentosRadicado',$radicado)->with('men',$men);
   }
}
