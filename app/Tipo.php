<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Documento;

class Tipo extends Model
{
    protected $table='tipo_documento';

    protected $fillable=['nombre'];

    public function tipoCorrespondeDocumento(){
       return $this->hasMany('app\Documento','tipo_id','id');
    }

    public function guardar(Tipo $objTipo){
      $objTipo->save();
    }

    public function eliminar(Tipo $objTipo){
      $objTipo->delete();
    }

    public function buscar($id){
      return $this::find($id);
    }
}
