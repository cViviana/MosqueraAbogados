<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey='numero';
    protected $keyTyper='string';
    protected $fillable=['numero','nombre','tipo','telefono','email'];
    public function casoDemandado(){
       return $this->hasMany('App\Caso','demandado','numero');
    }
    public function casoDemandante(){
       return $this->hasMany('App\Caso','demandante','numero');
    }

    public function guardar(Cliente $objCliente){
      $objCliente->save();
    }

    public function eliminar(Cliente $objCliente){
      $objCliente->delete();
    }

    public function buscar($numero){
      return $this::find($numero);
    }

    public function listar(){
      return $this::all();
    }
}
