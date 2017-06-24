<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculos';

    protected $fillable=['NombreCOme',
                         'idTipo',
                         'idModelo',
                         'idMotor',
                         'idTransmision',
                         'idSeguridad',
                         'idExteriores',
                         'idInteriores',
                         'precio'
                       ];
}
