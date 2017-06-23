<?php

use Illuminate\Database\Seeder;
use App\Models\DetalleInterior;
class DetalleInteriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for ($i=1; $i<7; $i++) {
              $detalle= new DetalleInterior;
              $detalle->idInteriores=1;
              $detalle->idItem=$i;
              $detalle->save();
          }

          for ($i=3; $i<=4; $i++) {
              $detalle= new DetalleInterior;
              $detalle->idInteriores=2;
              $detalle->idItem=$i;
              $detalle->save();
          }

          for ($i=1; $i<=2; $i++) {
              $detalle= new DetalleInterior;
              $detalle->idInteriores=3;
              $detalle->idItem=$i;
              $detalle->save();
          }

          for ($i=3; $i<=4; $i++) {
              $detalle= new DetalleInterior;
              $detalle->idInteriores=4;
              $detalle->idItem=$i;
              $detalle->save();
          }

          for ($i=1; $i<=1; $i++) {
              $detalle= new DetalleInterior;
              $detalle->idInteriores=5;
              $detalle->idItem=$i;
              $detalle->save();
            }

          for ($i=6; $i<=6; $i++) {
              $detalle= new DetalleInterior;
              $detalle->idInteriores=5;
              $detalle->idItem=$i;
              $detalle->save();
            }




    }
}
