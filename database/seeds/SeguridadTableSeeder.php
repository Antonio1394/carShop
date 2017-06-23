<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad;
class SeguridadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

         for ($i = 1; $i <6; $i++)
         {
              $seguridad = new seguridad;
              $seguridad->nombre='sgr'.$i;
              $seguridad->save();
         }
    }
}
