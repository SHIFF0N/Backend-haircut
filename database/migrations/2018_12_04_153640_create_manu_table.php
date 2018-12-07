<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barber_id')->unsigned();
            $table->foreign('barber_id')->references('id')->on('barbers')->onUpdate('cascade');
            $table->string('manu_id');
            $table->string('manu_timemale');
            $table->string('manu_timefemale');
            $table->string('manu_pricemale');
            $table->string('manu_pricefemale');
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
        Schema::dropIfExists('manu');
    }
}
