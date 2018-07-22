<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHuespedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huespedes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apePatHuesped');
            $table->string('apeMatHuesped');
            $table->string('nombreHuesped');
            $table->string('rfcHuesped');
            $table->string('emailHuesped');
            $table->string('telefonoHuesped');
            $table->string('calleHuesped');
            $table->string('numExtHuesped');
            $table->string('numIntHuesped');
            $table->string('coloniaHuesped');
            $table->string('cpHuesped');
            $table->string('estadoHuesped');
            $table->string('paisHuesped');
            $table->boolean('vehiculoHuesped');
            $table->string('placasVehiculoHuesped');
            $table->boolean('activoHuesped');
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
        Schema::dropIfExists('huespedes');
    }
}
