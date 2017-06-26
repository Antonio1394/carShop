<?php

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i<=20000 ; $i++) {
            $veh= new Vehiculo;
            $veh->NombreCOme='veh'.$i;
            $veh->idTipo=$faker->numberBetween($min = 1, $max = 5);
            $veh->idModelo=$faker->numberBetween($min = 1, $max = 33);
            $veh->idMotor=$faker->numberBetween($min = 1, $max = 4);
            $veh->idTransmision=$faker->numberBetween($min = 1, $max = 2);
            $veh->idSeguirdad=$faker->numberBetween($min = 1, $max = 5);
            $veh->IdExteriores=$faker->numberBetween($min = 1, $max = 5);
            $veh->idInteriores=$faker->numberBetween($min = 1, $max = 6);
            $veh->precio=$faker->numberBetween($min = 100000, $max = 350000);
            $veh->save();

        }
    }
}
