<?php

use Illuminate\Database\Seeder;
use App\Models\Municipio;
class MunicipioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mum= new Municipio;
        $mum->nombre='Champerico';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='El Asintal';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='Nuevo San Carlos';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='Retalhuleu';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='San Andrés Villa Seca';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='San Martín Zapotitlán';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='San Felipe';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='San Sebastián';
        $mum->idDepartamento=15;
        $mum->save();

        $mum= new Municipio;
        $mum->nombre='Santa Cruz Muluá';
        $mum->idDepartamento=15;
        $mum->save();
    }
}
