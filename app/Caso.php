<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table='caso';
    protected $primaryKey='radicado';
    protected $keyTyper='string';
    protected $fillable=['radicado','estado','fecha_inicio','descripcion','fecha_fin'];
    public function clienteDemandante(){
      return $this->belongsTo('App\Cliente','demandante', 'radicado');
    }
    public function clienteDemandado(){
      return $this->belongsTo('App\Cliente','demandado', 'radicado');
    }
}
