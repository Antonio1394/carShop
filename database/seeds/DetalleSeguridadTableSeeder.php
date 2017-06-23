<?php

use Illuminate\Database\Seeder;
use App\Models\DetalleSeguridad;
class DetalleSeguridadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<5; $i++) {
            $detalle= new DetalleSeguridad;
            $detalle->idSeguridad=1;
            $detalle->idItem=$i;
            $detalle->save();
        }

        for ($i=3; $i<=4; $i++) {
            $detalle= new DetalleSeguridad;
            $detalle->idSeguridad=2;
            $detalle->idItem=$i;
            $detalle->save();
        }

        for ($i=1; $i<=2; $i++) {
            $detalle= new DetalleSeguridad;
            $detalle->idSeguridad=3;
            $detalle->idItem=$i;
            $detalle->save();
        }

        for ($i=3; $i<=4; $i++) {
            $detalle= new DetalleSeguridad;
            $detalle->idSeguridad=4;
            $detalle->idItem=$i;
            $detalle->save();
        }

        for ($i=1; $i<=1; $i++) {
            $detalle= new DetalleSeguridad;
            $detalle->idSeguridad=5;
            $detalle->idItem=$i;
            $detalle->save();
        }


    }
}
