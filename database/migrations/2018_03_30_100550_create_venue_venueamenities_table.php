<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueVenueamenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_venueamenities', function (Blueprint $table) {
            $table->integer('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');

            $table->integer('venue_amenity_id')->unsigned();
            $table->foreign('venue_amenity_id')->references('id')->on('venueamenities')->onDelete('cascade');

            $table->primary(['venue_id', 'venue_amenity_id']);

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
        Schema::dropIfExists('venue_venueamenities');
    }
}
