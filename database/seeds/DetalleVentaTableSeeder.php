<?php

use Illuminate\Database\Seeder;
use App\Models\DetalleVenta;
class DetalleVentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <500 ; $i++)
        {

              $venta= new DetalleVenta;
              $venta->idVenta=$i;
              $venta->idVehiculo=$i;
              $venta->save();
        }
    }
}
