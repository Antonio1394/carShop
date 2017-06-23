<?php

use Illuminate\Database\Seeder;
use App\Models\TipoVehiculo;
class TipoVehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $tipo=new TipoVehiculo;
          $tipo->nombre='Sedan';
          $tipo->save();

          $tipo=new TipoVehiculo;
          $tipo->nombre='Camioneta ';
          $tipo->save();

          $tipo=new TipoVehiculo;
          $tipo->nombre='Convertible  ';
          $tipo->save();

          $tipo=new TipoVehiculo;
          $tipo->nombre='Minivan  ';
          $tipo->save();

          $tipo=new TipoVehiculo;
          $tipo->nombre='Pickup ';
          $tipo->save();
    }
}
