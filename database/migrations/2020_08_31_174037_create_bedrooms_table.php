<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedrooms', function (Blueprint $table) {
            $table->id();

            $table->integer('nro')->unsigned();
            $table->integer('nro_beds')->unsigned();
            $table->enum('size_beds', ['1 plaza', '1 1/2 plaza', '2 plaza']);

            $table->integer('floor');
            $table->boolean('is_bath');

            $table->double('price');
            
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
        Schema::dropIfExists('bedrooms');
    }
}
