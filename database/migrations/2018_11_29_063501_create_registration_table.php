<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barber_id')->unsigned();
            $table->foreign('barber_id')->references('id')->on('barbers')->onUpdate('cascade');
            $table->string('registration_name');
            $table->string('registration_number');
            $table->string('registration_closedate');
            $table->string('registration_timeopen');
            $table->string('registration_timeclose');
            $table->string('registration_photo1');
            $table->string('registration_photo2');
            $table->string('registration_address');
            $table->string('registration_profile');
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
        Schema::dropIfExists('registration');
    }
}
