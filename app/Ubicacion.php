<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
  protected $table='ubicacion_fisica';
  protected $fillable=['numArchivero','numGabeta'];

  public function ubicacionEstaDoc(){
     return $this->hasMany('app\Documento','ubicacion_id','id');
  }

  public function guardar(Ubicacion $ubic){
    $ubic->save();
  }

  public function eliminar(Ubicacion $ubic){
    $ubic->delete();
  }

  public function buscar($id){
    return $this::find($id);
  }
}
