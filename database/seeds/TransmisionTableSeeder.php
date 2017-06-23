<?php

use Illuminate\Database\Seeder;
use App\Models\Transmision;
class TransmisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trans= new Transmision;
        $trans->nombre='Automatico';
        $trans->save();

        $trans= new Transmision;
        $trans->nombre='Mecanico';
        $trans->save();
    }
}
