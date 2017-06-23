<?php

use Illuminate\Database\Seeder;
use App\Models\TipoMotor;
class TipoMotorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new TipoMotor;
        $tipo->nombre='Gasolina';
        $tipo->save();

        $tipo = new TipoMotor;
        $tipo->nombre='Diesel';
        $tipo->save();

        $tipo = new TipoMotor;
        $tipo->nombre='Electrico';
        $tipo->save();

        $tipo = new TipoMotor;
        $tipo->nombre='Hybrido';
        $tipo->save();
    }
}
