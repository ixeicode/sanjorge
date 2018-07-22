<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaVerificacionHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_verificacion_habitacions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estadoVerificacionHabitacion');
            $table->integer('idArticulo');
            $table->integer('idArea');
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
        Schema::dropIfExists('lista_verificacion_habitacions');
    }
}
