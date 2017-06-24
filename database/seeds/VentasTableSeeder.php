<?php

use Illuminate\Database\Seeder;
use App\Models\Venta;
class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

        for ($i=1; $i <500 ; $i++)
        {
              $venta= new Venta;
              $venta->idCliente=$i;
              $venta->fecha=$faker->dateTimeBetween($startDate = '-4 years', $endDate = 'now', $timezone = date_default_timezone_get());
              $venta->dispositivoCompra=$faker->randomElement($array = array ('Computadora','Telefono','Tablet'));
              $venta->explorador=$faker->randomElement($array = array ('Chrome','Internet Explores','Firefox'));
              $venta->SO=$faker->randomElement($array = array ('Android','IOS','Windows','Linux'));
              $venta->save();
        }
    }
}
