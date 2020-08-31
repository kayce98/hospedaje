<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recervations', function (Blueprint $table) {
            $table->id();
            $table->integer('nro_persons')->unsigned();
            $table->integer('phone')->unsigned();
            $table->text('place_of_origen');

            $table->dateTime('attention');
            $table->date('stay');
            $table->date('departure');

            $table->enum('state', ['completado', 'confirmado', 'sin confirmar', 'anulado']);
            /*
            El significado de cada estado son los siguientes:
                - Completado significa que la reserva se paso al libro de registro
                - Confirmado significa que la reserva ha sido pagado con un 50% del monto total de la reserva
                - Sin confirmar significa que la reserva no ha realizado nigún pago o no ha superado el monto del 50%
                - Anulado significa que la reserva ha sido de baja.
            */
            $table->foreignId('customer_id')->constrained('customers');
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
        Schema::dropIfExists('recervations');
    }
}
