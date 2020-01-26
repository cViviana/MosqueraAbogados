<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey='numero';
    protected $keyTyper='string';
    protected $fillable=['numero','nombre','tipo','telefono','email'];
    
}
