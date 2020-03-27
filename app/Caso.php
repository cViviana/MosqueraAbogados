<?php

namespace App;

use App\User;
use App\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Caso extends Model
{
    protected $table='caso';
    protected $primaryKey='radicado';
    protected $keyTyper='string';
    public  $incrementing = false;
    protected $fillable=['radicado','estado','fecha_inicio','descripcion','fecha_fin'];
    public function clienteCaso(){
      return $this->belongsTo('App\Cliente','cliente');
    }
    public function clienteContraparte(){
      return $this->belongsTo('App\Cliente','contraparte');
    }
    public function dirige (){
      return $this->belongsToMany('App\User','dirige','dir_radicado','dir_cedula');
      //...belongsToMany([modelo],[nombre_tabla_pivote], [nombre_fk1], [nombre_fk2]);
    }

    public function casoDoc(){
      return $this->hasMany('App\Documento','id','radicado');
    }

    public function guardar(Caso $objCaso, $contraparte, $cliente, $abogadoPpal, $abogadoAux){
      //asociar el contraparte y el cliente
      $objCaso->clienteContraparte()->associate($contraparte);
      $objCaso->clienteCaso()->associate($cliente);
      $objCaso->timestamps = false;
      $radicadoAux = $objCaso->radicado;
      $objCaso->save();
      //guardar en la tabla pivote
      $objCaso->radicado=$radicadoAux;
      $this->tablaPivote($objCaso,$abogadoPpal,$abogadoAux);
    }
    public function buscar($radicado){
      return $this::find($radicado);
    }

    public function listar(){
      return $this::with(['clienteContraparte:numero,nombre','clienteCaso:numero,nombre','dirige:dir_cedula,nombre'])->get();
    }
    public function tablaPivote(Caso  $objCaso, $abogadoPpal, $abogadoAux){
      $objCaso->dirige()->attach($abogadoPpal);
      if($abogadoPpal != $abogadoAux){
        $objAbogadoAux = new User;
        $objAbogadoAux = $objAbogadoAux->buscar($abogadoAux);
        if($objAbogadoAux!= null){
            $objCaso->dirige()->attach($objAbogadoAux->cedula);
        }
      }
    }

    public function actualizar(Caso $objCaso, $cliente, $contraparte, $abogadoPpal, $abogadoAux){
      $objCaso->clienteCaso()->dissociate($objCaso->cliente);
      $objCaso->clienteCaso()->associate($cliente);
      $objCaso->clienteContraparte()->dissociate($objCaso->contraparte);
      $objCaso->clienteContraparte()->associate($contraparte);
      $objCaso->timestamps = false;
      $objCaso->save();
      $this->actualizarPivote($objCaso, $abogadoPpal, $abogadoAux);
    }

    Public function actualizarPivote(Caso $objCaso,$abogadoPpal, $abogadoAux){
      $usuarios = DB::table('dirige')->where('dir_radicado', $objCaso->radicado)->select('dir_cedula')->get();
      $numUsuario=$usuarios->count();
      $objCaso->dirige()->detach($usuarios->first());

      if($abogadoAux != $abogadoPpal && $abogadoAux != '* Auxiliar 1' ){
         if($numUsuario==2){
           $objCaso->dirige()->detach($usuarios->last());
         }
         $objCaso->dirige()->attach($abogadoAux);
      }
      if($abogadoAux == '* Auxiliar 1' && $numUsuario == 2){
        $objCaso->dirige()->detach($usuarios->last());
      }
        $objCaso->dirige()->attach($abogadoPpal);
    }
}
