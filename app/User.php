<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use App\Roll;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

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
      
      //si vamos a eliminar un usuario hay q verificar que la firman no se  vaya
      //a quedar sin un abogado jefe

      //traemos la lista de todos los usuarios con su rol llamando a "listar()"
      $array =  ($this->listar())->all();
      
      //la variable contador nos servira para conocer si existen mas de 1 jefe y asi nos permitira
      //eliminarlo, la variable bandera nos servira para conocer si el usuario es jefe
      $contador = 0;
      $bandera = false;

      foreach($array as $dato){
        if($dato->name == 'Abogado jefe'){
          $contador++;
          if($dato->cedula == $objUser->cedula)
            $bandera = True;
        }
      }

      if($bandera){
        if($contador < 2)
          return false;
      }
      //si se desea eliminar el usuario, también se debe eliminar la relacion
      //con model_has_roles
      $this->eliminarRol($objUser->cedula);

      $objUser->delete();
      return true;
    }

    public function buscar($cedula){
      return $this::find($cedula);
    }

    public function listar(){
      
      //Realizamos una consulta interna para obtener el nombre del rol en el caso que el usario tenga
      //uno, despues hacemos un rightjoin para poder imprimir los usuarios que tenga un rol y
      //los que aun no se les alla asignado uno.

      $usuarios = DB::table(

        //realizamos un doble join con el objetivo de mostrar el nombre del rol del usuario
        DB::table('model_has_roles')->join('users', 'model_id' , '=' ,'cedula')
        ->join('roles','role_id','=','id')
        ->select('model_has_roles.model_id','users.cedula','users.nombre','users.email','users.telefono','roles.name')

      )->rightJoin('users','model_id','=','users.cedula')->get();

      return $usuarios;
    }

    public function eliminarRol($cedula){
      //realizamos una consulta para saber si este usuario ya contiene roles.
      $tam = count(DB::select('select * from model_has_roles where model_id = '.$cedula ));
      //calculamos el tamño del array de la consulta que se realiza arriba
      //si el tamño es '0' significa q no contenia roles, si es '1' significa que si contiene y debemos
      //borrarlo.
      if($tam != 0){
        DB::delete('delete from model_has_roles where model_id = '.$cedula);
      }
    }

    public function asignarRol($cedula, $rol){
      //Por reglas de la firma un usario solo debe tener un rol, en el caso que ya tenga un rol
      //asginado debes borrar ese
      $this->eliminarRol($cedula);

      $user = $this::find($cedula);
      $user->assignRole($rol);
    }

}
