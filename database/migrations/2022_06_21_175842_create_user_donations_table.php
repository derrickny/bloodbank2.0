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
        Schema::create('user_donations', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_id');
            $table->string('date_donated');
            $table->string('place_of_donation');
            $table->string('pints_donated');
            $table->integer('blood_group_id');
            $table->enum('status',['verified','unverified']);
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
        Schema::dropIfExists('user_donations');
    }
};
