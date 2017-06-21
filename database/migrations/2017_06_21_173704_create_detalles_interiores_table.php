<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesInterioresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesInteriores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idInteriores');
            $table->bigInteger('idItem');
            $table->foreign('idInteriores')->references('id')->on('interiores');
            $table->foreign('idItem')->references('id')->on('itemsInteriores');
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
        Schema::drop('detallesInteriores');
    }
}
