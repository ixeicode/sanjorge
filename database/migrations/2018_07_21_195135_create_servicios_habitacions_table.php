<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_habitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMantenimiento');
            $table->integer('idLimpieza');
            $table->integer('idObjetosExtraviados');
            $table->integer('idVerificacionHabitacion');
            $table->integer('idInsumosConsumidos');
            $table->integer('idAnomalia');
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
        Schema::dropIfExists('servicios_habitacions');
    }
}
