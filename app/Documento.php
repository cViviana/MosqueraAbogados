<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table='documento';
    protected $fillable=['path','descripcion','estado'];
    //esta funcion es la relacion que hay de documento hacia tipo de documento
    public function docCorrespondeTipo(){
      return $this->belongsTo('App\Tipo','tipo_id', 'id');
    }
    // esta funcion es la relacion que hay entre ubicacion y documento
    public function docEstaUbicacion(){
      return $this->belongsTo('App\Ubicacion','ubicacion_id', 'id');
    }

    //esta funcion guarda en la base de datos en la tabla documento , previamente debe estar creado el
    //tipo de documento y la ubicacion fisica
    public function guardar(Documento $doc , $tipo, $ubicacion){
      //busca el tipo de documento
      $tipo=Tipo::find($tipo);
      //busca si existe la ubicaciónes
      $ubicacion = Ubicacion::find($ubicacion);

      if($tipo!=null and $ubicacion!=null){
        #este es el caso si exite se asocia
        $doc->docCorrespondeTipo()->associate($tipo);
        $doc->docEstaUbicacion()->associate($ubicacion);
        $doc->save();
      }else{
        //si no esta devolver a la vista que  no se puede guardar el documento por que no exite el tipo
        echo "no esta";
      }
    }
}
