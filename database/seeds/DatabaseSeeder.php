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
         factory('App\Models\Cliente', 7000)->create();
         factory('App\User', 1)->create();
         $this->call(PaisTableSeeder::class);
         $this->call(DepartamentoTableSeeder::class);
         $this->call(MunicipioTableSeeder::class);
         $this->call(DetalleClienteTableSeeder::class);
         $this->call(TipoVehiculoTableSeeder::class);
         $this->call(MarcaTableSeeder::class);
         $this->call(ModeloTableSeeder::class);
         $this->call(TipoMotorTableSeeder::class);
         $this->call(TransmisionTableSeeder::class);
         $this->call(ItemSeguridadTableSeeder::class);
         $this->call(ItemExteriorTableSeeder::class);
         $this->call(ItemInteriorTableSeeder::class);
         $this->call(SeguridadTableSeeder::class);
         $this->call(ExteriorTableSeeder::class);
         $this->call(InteriorTableSeeder::class);
         $this->call(DetalleSeguridadTableSeeder::class);
         $this->call(DetalleExteriorTableSeeder::class);
         $this->call(DetalleInteriorTableSeeder::class);
         $this->call(VehiculoTableSeeder::class);
         $this->call(VentasTableSeeder::class);
         $this->call(DetalleVentaTableSeeder::class);

        Model::reguard();
    }
}
