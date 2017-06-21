<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesSeguridadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesSeguridad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idSeguridad');
            $table->bigInteger('idItem');
            $table->foreign('idSeguridad')->references('id')->on('seguridad');
            $table->foreign('idItem')->references('id')->on('itemsSeguridad');
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
        Schema::drop('detallesSeguridad');
    }
}
