<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NombreCOme');
            $table->bigInteger('idTipo');
            $table->bigInteger('idModelo');
            $table->bigInteger('idMotor');
            $table->bigInteger('idTransmision');
            $table->bigInteger('idSeguirdad');
            $table->bigInteger('IdExteriores');
            $table->bigInteger('idInteriores');
            $table->bigInteger('precio');
            $table->foreign('idTipo')->references('id')->on('tiposVehiculo');
            $table->foreign('idModelo')->references('id')->on('modelos');
            $table->foreign('idMotor')->references('id')->on('tiposMotor');
            $table->foreign('idTransmision')->references('id')->on('transmisiones');
            $table->foreign('idSeguirdad')->references('id')->on('seguridad');
            $table->foreign('IdExteriores')->references('id')->on('exteriores');
            $table->foreign('idInteriores')->references('id')->on('interiores');
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
        Schema::drop('vehiculos');
    }
}
