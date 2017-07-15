<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    protected $fillable=['nombre',
                         'apellido',
                         'direccion',
                         'NIT'];


    public $relations=['detalleCliente'];

    public function detalleCliente()
    {
        return $this->hasMany('App\Models\DetalleCliente', 'idCliente');

    }
}
