<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Roll;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'cedula';
    protected $keyTyper='string';
    protected $fillable = [
        'cedula','telefono','nombre', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dirige (){
      return $this->belongsToMany('App\Caso','dirige','dir_cedula','dir_radicado');
      //...belongsToMany([modelo],[nombre_tabla_pivote], [nombre_fk1], [nombre_fk2]);
    }
    public function usuarioPoseeRoll(){
      return $this->belongsTo('App\Roll','us_roll', 'cedula');
    }

    /*public function guardar(User $usuario,$rollId){
      //
      $roll = Roll::find($rollId);
      echo('*'.$roll->id);
      if($roll!=null){
        #este es el caso si exite se asocia
        $usuario->usuarioPoseeRoll()->associate($roll);
        $usuario->save();
      }else{
        //si no esta devolver a la vista que  no se puede guardar el documento por que no exite el tipo
        echo "no esta";
      }
    }*/

    public function buscar($numero){
      return $this::find($numero);
    }

    public function listar(){
      return $this::all();
    }

}
