<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
         factory('App\Models\Cliente', 1000)->create();
         $this->call(PaisTableSeeder::class);
         $this->call(DepartamentoTableSeeder::class);
         $this->call(MunicipioTableSeeder::class);
         $this->call(DetalleClienteTableSeeder::class);


        Model::reguard();
    }
}
