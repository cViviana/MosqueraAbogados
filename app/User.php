<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'nombre', 'email', 'password','cedula','telefono'
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

    public function Dirige (){
      return $this->belongsToMany('App\Caso','dirige','dir_radicado',
        'dir_cedula');
      //...belongsToMany([modelo],[nombre_tabla_pivote], [nombre_fk1], [nombre_fk2]);
    }
  
}
