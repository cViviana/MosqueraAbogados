<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\File;
use App\Documento;
use Illuminate\Support\Facades\Storage;
use Aws\S3\Exception\S3Exception as S3;

class FileController extends Controller
{
  public function index($direccion)
  {
    try{
      return Storage::disk('s3')->response($direccion);

    }catch (S3 $e){
      return $e;
    }
  }

  public function store(Request $request)
  {
      try{
        if($request->hasFile('file')) {

           $nombreArchivo = $request->file('file')->getClientOriginalName();

           $direccion = $request->radicado_doc.'/'.$nombreArchivo;

           //Guardar el archivo
           Storage::disk('s3')->put($direccion, fopen($request->file('file'), 'r+'));

           return $nombreArchivo;
        }
      }catch (S3 $e){
        return null;
      }
  }
  public function download($file)
  {
      // Retornamos una descarga especificando el driver dropbox
      // e indicándole al método download el nombre del archivo.
      return Storage::disk('dropbox')->download($file);
  }

  public function destroy($file)
  {
      // Eliminamos el archivo en dropbox llamando a la clase
      // instanciada en la propiedad dropbox.
    try{
      Storage::disk('s3')->delete($file);
    }catch (BadRequest $e){
      $men = "Error en el Dropbox al eliminar documento";
      return redirect()->route('subirDocumento')->with('men',$men);
    }
  }
}
