<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\admin\FileController;

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
        $doc->path = $path;
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
}
