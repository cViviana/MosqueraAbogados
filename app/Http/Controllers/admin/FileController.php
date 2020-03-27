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
      $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();
  }

  public function index()
  {
      // Obtenemos todos los registros de la tabla files
      // y retornamos la vista files con los datos.
      $files = Documento::orderBy('created_at', 'desc')->get();

      return view('administrador.procesos-judiciales.files', compact('files'));
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
  public function download(File $file)
  {
      // Retornamos una descarga especificando el driver dropbox
      // e indicándole al método download el nombre del archivo.
      return Storage::disk('dropbox')->download($file->name);
  }

  public function destroy(File $file)
  {
      // Eliminamos el archivo en dropbox llamando a la clase
      // instanciada en la propiedad dropbox.
      $this->dropbox->delete($file->name);
      // Eliminamos el registro de nuestra tabla.
      $file->delete();

      return back();
  }
}
