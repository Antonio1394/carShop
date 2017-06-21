<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesCliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idCliente');
            $table->enum('estadoCivil',['Soltero','Casado','Unido','Divorciado','Viudo']);
            $table->date('fechaNac');
            $table->integer('noHijos');
            $table->integer('ingesos');
            $table->string('industriaLaboral');
            $table->string('colorFav');
            $table->integer('noVehNuevos');//numero de Vehiculos comprados Nuevos
            $table->integer('noVehUsados');//numero de Vehiculos comprados Usados
            $table->string('CodPostal');
            $table->bigInteger('idMunicipio');
            $table->bigInteger('idDepartamento');
            $table->bigInteger('idPais');
            $table->foreign('idMunicipio');
                  ->references('id')
                  ->on('municipios');
            $table->foreign('idDepartamento')
                  ->references('id')
                  ->on('departamentos');
            $table->foreign('idPais')
                  ->references('id')
                  ->on('paises');
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
        Schema::drop('detallesCliente');
    }
}
