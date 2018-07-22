<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituacionesEmergentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones_emergentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcionSituacionEmergente');
            $table->date('fechaSituacionEmergente');
            $table->integer('idSituacionEmergente');
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
        Schema::dropIfExists('situaciones_emergentes');
    }
}
