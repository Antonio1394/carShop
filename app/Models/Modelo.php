<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table='modelos';

    protected $fillable=['nombre',
                         'año',
                         'idMarca'
                       ];
}
