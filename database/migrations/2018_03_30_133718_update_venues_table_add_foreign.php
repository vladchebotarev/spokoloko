<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVenuesTableAddForeign extends Migration
{/**
 * Run the migrations.
 *
 * @return void
 */
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->foreign('package_id')->references('id')->on('venue_package');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
}
