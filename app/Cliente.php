<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey='numero';
    protected $keyTyper='string';
    protected $fillable=['numero','nombre','tipo','telefono','email','roll'];
    public function casoContraparte(){
       return $this->hasMany('App\Caso','contraparte','numero');
    }
    public function casoCliente(){
       return $this->hasMany('App\Caso','cliente','numero');
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

    public function listar($roll){
      return $this::where("roll","=",$roll)->get();;
    }
}
