<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesExterioresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesExteriores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idExteriores');
            $table->bigInteger('idItem');
            $table->foreign('idExteriores')->references('id')->on('Exteriores');
            $table->foreign('idItem')->references('id')->on('itemsExteriores');
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
        Schema::drop('detallesExteriores');
    }
}
