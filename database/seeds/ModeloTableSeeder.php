<?php

use Illuminate\Database\Seeder;
use App\Models\Modelo;
class ModeloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        ////BMW/////////////////////
        $modelo=new Modelo;
        $modelo->nombre='Serie 2';
        $modelo->idMarca=1;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Serie 3';
        $modelo->idMarca=1;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Serie 4';
        $modelo->idMarca=1;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='I3';
        $modelo->idMarca=1;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='I4';
        $modelo->idMarca=1;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        ////Ford///////////////////////

        $modelo=new Modelo;
        $modelo->nombre='F-350';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='F-400';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='F-450';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Flex';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Focus';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Fusión ';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='G';
        $modelo->idMarca=2;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        /////Honda/////////////////////
        $modelo=new Modelo;
        $modelo->nombre='Pilot';
        $modelo->idMarca=3;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Civic';
        $modelo->idMarca=3;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Fit';
        $modelo->idMarca=3;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Accord';
        $modelo->idMarca=3;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        ////////Hyundai///////////////////////////
        $modelo=new Modelo;
        $modelo->nombre='Accent';
        $modelo->idMarca=4;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Elantra';
        $modelo->idMarca=4;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Santa Fe';
        $modelo->idMarca=4;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Tucson';
        $modelo->idMarca=4;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Veloster';
        $modelo->idMarca=4;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        //////////////Mazda///////////////////////////////
        $modelo=new Modelo;
        $modelo->nombre='Cx-3';
        $modelo->idMarca=5;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Cx-5';
        $modelo->idMarca=5;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Mazda 3';
        $modelo->idMarca=5;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Mazda 6';
        $modelo->idMarca=5;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        ////////////Toyota/////////////////////////
        $modelo=new Modelo;
        $modelo->nombre='4Runner';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Rav4';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Yaris';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Pirus';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Lnad Cruiser';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Corolla';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Sienna';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();

        $modelo=new Modelo;
        $modelo->nombre='Tacoma';
        $modelo->idMarca=6;
        $modelo->año=$faker->numberBetween($min = 2013, $max = 2017);
        $modelo->save();


    }
}
