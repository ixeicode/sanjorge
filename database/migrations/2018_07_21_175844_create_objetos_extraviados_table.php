<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetosExtraviadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos_extraviados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoObjetoExtraviado');
            $table->string('nombreObjetoExtraviado');
            $table->string('descripcionObjetoExtraviado');
            $table->string('observacionesObjetoExtraviado');
            $table->string('nombreEncontroObjetoExtraviado');
            $table->string('nombreRecibioObjetoExtraviado');
            $table->date('fechaEntregaObjetoExtraviado');
            $table->boolean('entregaObjetoExtraviado');
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
        Schema::dropIfExists('objetos_extraviados');
    }
}
