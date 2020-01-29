<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table='caso';
    protected $primarykey='radicado';
    protected $keyTyper='string';
    protected $fillable=['radicado','estado','fecha_inicio','descripcion','fecha_fin'];
}
