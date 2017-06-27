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

    public $relations=['tipoV','modelo','tipoM','transmision'];

    public function tipoV()
    {
        return $this->belongsTo('App\Models\TipoVehiculo', 'idTipo');
    }

    public function modelo()
    {
        return $this->belongsTo('App\Models\Modelo', 'idModelo');
    }

    public function tipoM()
    {
        return $this->belongsTo('App\Models\TipoMotor', 'idMotor');
    }

    public function transmision()
    {
        return $this->belongsTo('App\Models\Transmision', 'idTransmision');
    }
}
