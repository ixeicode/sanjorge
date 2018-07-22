<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosEspecialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_especiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcionServicioEspecial');
            $table->string('precioServicioEspecial');
            $table->boolean('disponibilidadServicioEspecial');
            $table->integer('idAlimento');
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
        Schema::dropIfExists('servicios_especiales');
    }
}
