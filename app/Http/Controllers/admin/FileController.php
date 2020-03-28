<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\File;
use App\Documento;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;
use Spatie\Dropbox\Exceptions\BadRequest;

class FileController extends Controller
{
  public function __construct()
  {
      // Necesitamos obtener una instancia de la clase Client la cual tiene algunos métodos
      // que serán necesarios.
    try{
      $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();
    }catch (BadRequest $e){
      $men = "Error en el Dropbox";
      return redirect()->route('subirDocumento')->with('men',$men);
    }
  }

  public function store(Request $request)
  {
      try{
        // Guardamos el archivo indicando el driver y el método putFileAs el cual recibe
        // el directorio donde será almacenado, el archivo y el nombre.
        // ¡No olvides validar todos estos datos antes de guardar el archivo!

        Storage::disk('dropbox')->putFileAs(
            '/'.$request->radicado_doc.'/',
            $request->file('file'),
            $request->file('file')->getClientOriginalName()
        );
        //dd($request->file('file')->getClientOriginalName());

        // Creamos el enlace publico en dropbox utilizando la propiedad dropbox
        // definida en el constructor de la clase y almacenamos la respuesta.
        $response = $this->dropbox->createSharedLinkWithSettings(
            '/'.$request->radicado_doc.'/'.$request->file('file')->getClientOriginalName(),
            ["requested_visibility" => "public"]
        );
        //$request["path"] = $response['url'];
        return $response['url'];
      }catch (BadRequest $e){
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
      $this->dropbox->delete($file);
    }catch (BadRequest $e){
      $men = "Error en el Dropbox al eliminar documento";
      return redirect()->route('subirDocumento')->with('men',$men);
    }
  }
}
