<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacion_fisica extends Model
{
    protected $table='ubicacion_fisica';
    protected $fillable=['numArchivero','numGabeta'];
    
}
