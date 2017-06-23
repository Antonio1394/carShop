<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoMotor extends Model
{
    protected $table='tiposMotor';

    protected $fillable=['nombre'];
}
