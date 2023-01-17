<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agency', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->string('departure_time', 100);
            $table->string('arrival_time', 100);
            $table->string('train_code', 30);
            $table->integer('carriage_number');
            $table->boolean('in_time');
            $table->boolean('cancelled');
            
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
        Schema::dropIfExists('trains');
    }
};
