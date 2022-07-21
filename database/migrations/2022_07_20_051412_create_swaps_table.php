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
        Schema::create('swaps', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_requesting');
            $table->string('hospital_b');
            $table->string('blood_requesting');
            $table->string('blood_they_have');
            $table->integer('stock_requesting');
            $table->integer('stock_they_have');
            $table->string('status');
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
        Schema::dropIfExists('swaps');
    }
};
