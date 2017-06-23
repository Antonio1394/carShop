<?php

use Illuminate\Database\Seeder;
use App\Models\Pais;
class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pais= new Pais;
        $pais->nombre='Belice ';
        $pais->save();

        $pais= new Pais;
        $pais->nombre='Costa Rica';
        $pais->save();

        $pais= new Pais;
        $pais->nombre='El Salvador';
        $pais->save();

        $pais= new Pais;
        $pais->nombre='Guatemala';
        $pais->save();

        $pais= new Pais;
        $pais->nombre='Honduras';
        $pais->save();

        $pais= new Pais;
        $pais->nombre='Nicaragua';
        $pais->save();

        $pais= new Pais;
        $pais->nombre='Panamá';
        $pais->save();





    }
}
