<?php

use Illuminate\Database\Seeder;
use App\Models\Exterior;

class ExteriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i <6; $i++)
      {
           $exterior = new Exterior;
           $exterior->nombre='ext'.$i;
           $exterior->save();
      }
    }
}
