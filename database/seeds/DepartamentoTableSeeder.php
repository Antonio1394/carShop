<?php

use Illuminate\Database\Seeder;
use App\Models\Departamento;
class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dep=new Departamento;
        $dep->nombre='Alta Verapaz';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Baja Verapaz';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Chimaltenango';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Chiquimula';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Petén';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='El Progreso';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Quiché';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Escuintla';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Guatemala';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Huehuetenango';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Izabal';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Jalapa';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Jutiapa';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Quetzaltenango';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Retalhuleu';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Sacatepéquez';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='San Marcos';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Santa Rosa';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Sololá';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Suchitepéquez';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Totonicapán';
        $dep->idPais=4;
        $dep->save();

        $dep=new Departamento;
        $dep->nombre='Zacapa';
        $dep->idPais=4;
        $dep->save();


    }
}
