<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedroomPaymentStayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedroom_payment_stay', function (Blueprint $table) {
            $table->id();
            $table->date('stay');

            $table->double('bedroom_amount');
            $table->double('additional_amount');
            $table->double('total_amount');

            $table->foreignId('bedroom_payment_id')->constrained('bedroom_payment');

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
        Schema::dropIfExists('bedroom_payment_stay');
    }
}
