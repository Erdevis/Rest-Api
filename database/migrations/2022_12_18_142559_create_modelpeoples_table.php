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
        Schema::create('modelpeople', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('lastname');
            $table->integer('phone_number');
            $table->string('adress');
            $table->string('city/country');
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
        Schema::dropIfExists('modelpeople');
    }
};
