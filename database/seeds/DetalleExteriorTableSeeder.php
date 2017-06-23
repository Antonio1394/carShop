<?php

use Illuminate\Database\Seeder;
use App\Models\DetalleExterior;
class DetalleExteriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<6; $i++) {
          $detalle= new DetalleExterior;
          $detalle->idExteriores=1;
          $detalle->idItem=$i;
          $detalle->save();
      }

      for ($i=3; $i<=4; $i++) {
          $detalle= new DetalleExterior;
          $detalle->idExteriores=2;
          $detalle->idItem=$i;
          $detalle->save();
      }

      for ($i=1; $i<=2; $i++) {
          $detalle= new DetalleExterior;
          $detalle->idExteriores=3;
          $detalle->idItem=$i;
          $detalle->save();
      }

      for ($i=3; $i<=4; $i++) {
          $detalle= new DetalleExterior;
          $detalle->idExteriores=4;
          $detalle->idItem=$i;
          $detalle->save();
      }

      for ($i=1; $i<=1; $i++) {
          $detalle= new DetalleExterior;
          $detalle->idExteriores=5;
          $detalle->idItem=$i;
          $detalle->save();
      }
    }
}
