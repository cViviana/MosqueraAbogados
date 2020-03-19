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

    public function guardar(User $objUser){
      $objUser->save();
    }

    public function eliminar(User $objUser){
      $objUser->delete();
    }

    public function buscar($cedula){
      return $this::find($cedula);
    }

    public function listar(){
      return $this::all();
    }

    public function asignarRol($cedula, $rol){
      $user = $this::find($cedula);
      $user->assignRole($rol);
    }

}
