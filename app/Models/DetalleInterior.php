<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleInterior extends Model
{
    protected $table='detallesInteriores';

    protected $fillable=['idInteriores','idItem'];
}
