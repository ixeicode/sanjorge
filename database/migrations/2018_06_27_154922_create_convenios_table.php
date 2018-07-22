<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoConvenio'); //Indica el tipo de convenio entere Hotel San Jorge y la empresa x
            $table->string('descripcionConvenio'); //Describe el alcance del convenio entre Hotel San Jorge y la empresa x
            $table->string('descuentoConvenio'); //Indica el descuento del convenio
            $table->boolean('estadoConvenio'); //Indica si está habilitado
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
        Schema::dropIfExists('convenios');
    }
}
