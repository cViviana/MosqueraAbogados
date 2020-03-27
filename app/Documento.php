<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\admin\FileController;
use Illuminate\Support\Facades\Crypt;

class Documento extends Model
{
    protected $table='documento';
    protected $fillable=['nombreArchivo','path','descripcion'];
    //esta funcion es la relacion que hay de documento hacia tipo de documento
    public function docCorrespondeTipo(){
      return $this->belongsTo('App\Tipo','tipo_id');
    }
    // esta funcion es la relacion que hay entre ubicacion y documento
    public function docEstaUbicacion(){
      return $this->belongsTo('App\Ubicacion','ubicacion_id');
    }

    public function docCaso(){
      return $this->belongsTo('App\Caso','radicado_doc');
    }

    //esta funcion guarda en la base de datos en la tabla documento , previamente debe estar creado el
    //tipo de documento y la ubicacion fisica
    public function guardar(Documento $doc , $radicado,$tipo, $ubicacion, $request){

        //Subimos el archivo con FileController y nos retorna la request con el path
        $file = new FileController;
        $path = $file->store($request);
        $doc->path = Crypt::encryptString($path);

        if($path != null){
          $doc->docCorrespondeTipo()->associate($tipo);
          $doc->docEstaUbicacion()->associate($ubicacion);
          $doc->docCaso()->associate($radicado);
          $doc->nombreArchivo = $request->file('file')->getClientOriginalName();
          $doc->save();
          return true;
        }else{
          return false;
        }
    }

    public function listarDocumentos($radicado)
    {
      return $this::with(['docCorrespondeTipo:id,nombre','docEstaUbicacion:id,numArchivero,numGaveta'])->get();
    }

    public function verDoc($id)
    {
      $doc = $this->buscar($id);
      $path = Crypt::decryptString($doc->path);
      return $path;
    }

    public function buscar($id)
    {
      return $this::find($id);
    }

    public function eliminar($id)
    {
      $doc = $this->buscar($id);
      if($doc!= null){
        $nombre = $doc->nombreArchivo;
        $radicado = $doc->radicado_doc;
        $ruta = $radicado.'/'.$nombre;
        $file = new FileController;
        $file->destroy($ruta);
        $doc->delete();
        return true;
      }else {
        return false;
      }
    }
}
