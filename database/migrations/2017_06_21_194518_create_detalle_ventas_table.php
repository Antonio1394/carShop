<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleVentas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idVenta');
            $table->bigInteger('idVehiculo');
            $table->foreign('idVenta')->references('id')->on('ventas');
            $table->foreign('idVehiculo')->references('id')->on('vehiculos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalleVentas');
    }
}
