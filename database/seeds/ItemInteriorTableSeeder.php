<?php

use Illuminate\Database\Seeder;
use App\Models\ItemInterior;
class ItemInteriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new ItemInterior;
        $item->nombre='Radio con lectura MP3';
        $item->save();

        $item = new ItemInterior;
        $item->nombre=' Radio con Bluetooth';
        $item->save();

        $item = new ItemInterior;
        $item->nombre='Asientos de piel';
        $item->save();

        $item = new ItemInterior;
        $item->nombre='Climatizador';
        $item->save();

        $item = new ItemInterior;
        $item->nombre='Asientos eléctricos';
        $item->save();

        $item = new ItemInterior;
        $item->nombre='Cargador USB';
        $item->save();
    }
}
