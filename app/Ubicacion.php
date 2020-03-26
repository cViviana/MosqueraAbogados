<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\valFormRegUbi;
use Illuminate\Support\Collection;

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

  public function listar(){
    return $this::all();
  }

  public function existeUbicacion(valFormRegUbi $request){
    $gaveta = $this::where("numGaveta","=",$request->numGaveta)->get();
    $archivador = $this::where("numArchivero","=",$request->numArchivero)->get();
    if($gaveta->first() != null && $archivador->first() != null)
      return true;
    return false;
  }
}
