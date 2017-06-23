<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleExterior extends Model
{
    protected $table='detallesExteriores';

    protected $fillable=['idExteriores','idItem'];
}
