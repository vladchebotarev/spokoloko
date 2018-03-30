<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueVenuetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_venuetypes', function (Blueprint $table) {

            $table->integer('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');

            $table->integer('venue_type_id')->unsigned();
            $table->foreign('venue_type_id')->references('id')->on('venuetypes')->onDelete('cascade');

            $table->primary(['venue_id', 'venue_type_id']);

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
        Schema::dropIfExists('venue_venuetypes');
    }
}
