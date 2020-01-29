<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table='log';
    protected $primaryKey='fecha';
    protected $keyTyper='dateTime';
    protected $fillable=['fecha','accion', 'estadoAnterior', 'estadoNuevo'];
}
