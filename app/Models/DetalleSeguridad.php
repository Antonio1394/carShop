<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleSeguridad extends Model
{
    protected $table='detallesSeguridad';

    protected $fillable=['idSeguridad','idItem'];
}
