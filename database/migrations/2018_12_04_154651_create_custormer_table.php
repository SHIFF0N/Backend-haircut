<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustormerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custormer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('custromer_name');
            $table->string('custromer_sex');
            $table->string('custromer_number');
            $table->string('custromer_style');
            $table->string('custromer_more');
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
        Schema::dropIfExists('custormer');
    }
}
