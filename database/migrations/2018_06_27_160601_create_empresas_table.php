<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreEmpresa'); //Nombre de la empresa
            $table->string('calleEmpresa'); //Calle del domicilio de la empresa
            $table->integer('noExteriorEmpresa'); //Número exterior del domicilio de la empresa
            $table->integer('noInteriorEmpresa'); //Número interior del domicilio de la empresa
            $table->string('coloniaEmpresa'); //Nombre de la colonia o población del domicilio de la empresa
            $table->string('cpEmpresa'); //Código postal de la empresa
            $table->string('estadoEmpresa'); //Estado donde está ubicada la empresa
            $table->string('paisEmpresa'); //País donde se ubica la empresa
            $table->string('telefonoEmpresa'); //Teléfono de la empresa
            $table->string('emailEmpresa'); //Correo electrónico de la empresa
            $table->string('rfcEmpresa'); //RFC de la empresa
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
        Schema::dropIfExists('empresas');
    }
}
