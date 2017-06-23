<?php

use Illuminate\Database\Seeder;
use App\Models\Interior;

class InteriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <7; $i++)
        {
             $interior = new Interior;
             $interior->nombre='int'.$i;
             $interior->save();
        }
    }
}
