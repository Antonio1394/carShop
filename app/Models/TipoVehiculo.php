<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $table='tiposVehiculo';

    protected $fillable=['nombre'];
}
