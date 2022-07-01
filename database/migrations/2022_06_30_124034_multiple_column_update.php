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
        Schema::table('user_donations', function (Blueprint $table) {
            //
            $table->renameColumn('place_of_donation','donation_user_id');
            $table->renameColumn('blood_group_id','blood_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_donations', function (Blueprint $table) {
            //
        });
    }
};
