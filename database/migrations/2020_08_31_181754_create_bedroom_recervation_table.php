<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedroomRecervationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedroom_recervation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recervation_id')->constrained('recervations');
            $table->foreignId('bedroom_id')->constrained('bedrooms');
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
        Schema::dropIfExists('bedroom_recervation');
    }
}
