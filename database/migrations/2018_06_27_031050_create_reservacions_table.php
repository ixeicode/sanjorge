<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noAdultosReservacion');
            $table->integer('noNinosReservacion');
            $table->date('fechaLlegadaReservacion'); //Fecha de llegada de los reservantes
            $table->date('fechaSalidaReservacion'); //Fecha de ida de los reservantes
            $table->string('formaPagoReservacion'); //Forma de pago de la reservación
            $table->string('medioReservacion'); //Indica el medio de reservación: física, telefónica, email, online
            $table->string('observacionesReservacion'); //Observaciones de la reservación
            $table->string('estadoReservacion'); //Indica el estado de la reservación: confirmada, parcialmente confirmada, no confirmada, cancelada.
            $table->integer('numVisitasClienteReservacion'); //Guarda el número de visitas realizadas por el cliente
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
        Schema::dropIfExists('reservacions');
    }
}
