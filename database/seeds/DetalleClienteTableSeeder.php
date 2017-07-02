<?php

use Illuminate\Database\Seeder;
use App\Models\DetalleCliente;
class DetalleClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 1; $i <=7000; $i++)
        {
            $detalle = new DetalleCliente;
            $detalle->idCliente =$i;
            $detalle->estadoCivil =$faker->randomElement($array = array ('Soltero','Casado','Unido','Divorciado','Viudo'));
            $detalle->fechaNac =$faker->dateTimeBetween($startDate = '-90 years', $endDate = '22 years', $timezone = date_default_timezone_get());

            $detalle->noHijos =$faker->numberBetween($min = 0, $max = 7);
            $detalle->ingresos =$faker->numberBetween($min = 2500, $max = 10000);
            $detalle->industriaLaboral =$faker->randomElement($array = array ('saludad','informática','comercio','educativo'));
            $detalle->colorFav =$faker->randomElement($array = array ('Rojo','Azul','Amarillo','Verde','Negro','Anaranjado'));
            $detalle->noVehNuevos =$faker->numberBetween($min = 0, $max = 7);
            $detalle->noVehUsados =$faker->numberBetween($min = 0, $max = 7);
            $detalle->CodPostal=$faker->postcode;
            $detalle->idMunicipio=$faker->numberBetween($min = 1, $max = 9);
            $detalle->idDepartamento=15;
            $detalle->idPais=4;
            $detalle->save();
        }

    }
}
