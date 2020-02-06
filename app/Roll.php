<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Roll extends Model
{
  protected $table='roll';
  protected $fillable=['nombre'];

  public function guardar($nombre){

      $roll = Roll::where('nombre', $nombre)->first();
      //echo "este es el nombre".$roll->nombre;
      if(is_null($roll)){
        $roll = new Roll();
        $roll->nombre=$nombre;
        $roll->save();
      }else{
        //si ya existe OJO implementación redirección
        echo 'El roll ya existe';
      }
  }
}
