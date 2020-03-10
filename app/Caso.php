<?php

namespace App;

use App\User;
use App\Cliente;
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
    public function dirige (){
      return $this->belongsToMany('App\User','dirige','dir_radicado','dir_cedula');
      //...belongsToMany([modelo],[nombre_tabla_pivote], [nombre_fk1], [nombre_fk2]);
    }

    public function guardar(Caso $objCaso, Cliente $objDemandado, Cliente $objDemandante, User $objAbogadoPpal,User $objAbogadoAux){
      //asociar el demandado y el demandante
      $objCaso->clienteDemandado()->associate($objDemandado->numero);
      $objCaso->clienteDemandante()->associate($objDemandante->numero);
      $objCaso->timestamps = false;
      $radicadoAxu= $objCaso->radicado;
      $objCaso->save();
      //guardar en la tabla pivote
      $objCaso->radicado=$radicadoAxu;
       $objCaso->tablaPivote($objCaso,$objAbogadoPpal,$objAbogadoAux);
    }
    public function buscar($radicado){
      return $this::find($radicado);
    }

    public function listar(){
      return $this::all();
    }
    public function tablaPivote(Caso  $objCaso, User  $objAbogadoPpal, User $objAbogadoAux){
        dd($objAbogadoPpal);
        $objCaso->dirige()->attach($objAbogadoPpal->cedu);
    }
}
