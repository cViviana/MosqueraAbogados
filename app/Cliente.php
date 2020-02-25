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
       return $this->hasMany('app\Caso','demandado','numero');
    }
    public function casoDemandante(){
       return $this->hasMany('app\Caso','demandante','numero');
    }


    public function guardar(Cliente $objCliente){
      $objCliente->save();
      $men = "El cliente fue registrado con exito";
      dd($men);
    }

    public function editar(Cliente $objCliente){
      $objCliente->save();
      $men = "El cliente fue actualizado con exito";
      dd($men);
    }

    public function eliminar(Cliente $objCliente){
      $objCliente->delete();
      $men = "El cliente fue eliminado con exito";
      dd($men);
    }
}
