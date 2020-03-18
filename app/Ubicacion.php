<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\valFormRegUbi;

class Ubicacion extends Model
{
  protected $table='ubicacion_fisica';
  protected $fillable=['numArchivero','numGaveta'];

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

  public function existeUbicacion(valFormRegUbi $request){
    if($this::find(123) != null && $this::find(123) != null){
      dd("true");
    }
    dd("false");
    //return true;
      
    
    //return false; 
  }
}
