<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalleVentas';

    protected $fillable=['idVenta','idVehiculo'];
}
