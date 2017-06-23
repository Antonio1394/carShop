<?php

use Illuminate\Database\Seeder;
use App\Models\ItemSeguridad;
class ItemSeguridadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item= new ItemSeguridad;
        $item->nombre='Bolsas de aire';
        $item->save();

        $item= new ItemSeguridad;
        $item->nombre='Sensores de parqueo';
        $item->save();

        $item= new ItemSeguridad;
        $item->nombre='Cámara trasera';
        $item->save();

        $item= new ItemSeguridad;
        $item->nombre='Frenos abs';
        $item->save();


    }
}
