<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCliente extends Model
{
    protected $table='detallesCliente';

    protected $fillable=['idCliente',
                         'estadoCivil',
                         'fechaNac',
                         'noHijos',
                         'ingesos',
                         'industriaLaboral',
                         'colorFav',
                         'noVehNuevos',
                         'noVehUsados',
                         'CodPostal',
                         'idMunicipio',
                         'idDepartamento',
                         'idPais',            
                          ]
}
