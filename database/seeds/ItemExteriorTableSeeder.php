<?php

use Illuminate\Database\Seeder;
use App\Models\ItemExterior;
class ItemExteriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new ItemExterior;
        $item->nombre='Luces LED';
        $item->save();

        $item = new ItemExterior;
        $item->nombre='Luces HID';
        $item->save();

        $item = new ItemExterior;
        $item->nombre='Rines';
        $item->save();

        $item = new ItemExterior;
        $item->nombre='Sunroof';
        $item->save();

        $item = new ItemExterior;
        $item->nombre='Llanta de Repuesto';
        $item->save();
    }
}
