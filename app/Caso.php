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

    public function guardar(Caso $objCaso, $demandado, $demandante, $abogadoPpal, $abogadoAux){
      //asociar el demandado y el demandante
      $objCaso->clienteDemandado()->associate($demandado);
      $objCaso->clienteDemandante()->associate($demandante);
      $objCaso->timestamps = false;
      $radicadoAxu= $objCaso->radicado;
      $objCaso->save();
      //guardar en la tabla pivote
      $objCaso->radicado=$radicadoAxu;
      $this->tablaPivote($objCaso,$abogadoPpal,$abogadoAux);
    }
    public function buscar($radicado){
      return $this::find($radicado);
    }

    public function listar(){
      return $this::all();
    }
    public function tablaPivote(Caso  $objCaso, $abogadoPpal, $abogadoAux){
        $objCaso->dirige()->attach($abogadoPpal);
        $objAbogadoAux = new User;
        $objAbogadoAux = $objAbogadoAux->buscar($abogadoAux);
        if($objAbogadoAux!= null){
            $objCaso->dirige()->attach($objAbogadoAux->cedula);
      }
    }
}
