<?php

use Illuminate\Database\Seeder;
use App\Models\Marca;
class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca =new Marca;
        $marca->nombre='BMW';
        $marca->save();

        $marca =new Marca;
        $marca->nombre='Ford';
        $marca->save();

        $marca =new Marca;
        $marca->nombre='Honda';
        $marca->save();

        $marca =new Marca;
        $marca->nombre='Hyundai';
        $marca->save();

        $marca =new Marca;
        $marca->nombre='Mazda';
        $marca->save();

        $marca =new Marca;
        $marca->nombre='Toyota';
        $marca->save();
    }
}
