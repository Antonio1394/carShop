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
                         'ingresos',
                         'industriaLaboral',
                         'colorFav',
                         'noVehNuevos',
                         'noVehUsados',
                         'CodPostal',
                         'idMunicipio',
                         'idDepartamento',
                         'idPais',
                       ];
}
