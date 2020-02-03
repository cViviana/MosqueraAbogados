<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Documento;
use App\Tipo;

class Tipo extends Model
{
    protected $table='tipo_documento';

    protected $fillable=['nombre'];

    public function tipoCorrespondeDocumento(){
       return $this->hasMany('app\Documento','tipo_id','id');
    }

    public function guardar(Tipo $t){
      $t->save();
      $mensaje="se guardo correctamete la tipo";
      return view('crearTipodocumento');
      //->with('men',$mensaje);
    }
}
