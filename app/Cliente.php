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


    public function guardar(Cliente $cliente){
      //Buscamos el Cliente
        $clienteAux=Cliente::find($cliente->numero);
        if($clienteAux == null){
          $cliente->save();
        }else{
          //si ya existe OJO implementación redirección
          echo 'El cliente ya existe';
        }

    }
}
