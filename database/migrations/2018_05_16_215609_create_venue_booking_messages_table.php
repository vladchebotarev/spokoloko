<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueBookingMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_booking_messages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('venue_booking_id')->unsigned();
            $table->foreign('venue_booking_id')->references('id')->on('venue_bookings')->onDelete('cascade');

            $table->enum('sender', ['Owner', 'Client'])->default('Client')->nullable();
            $table->integer('sender_id')->unsigned()->nullable();
            $table->integer('receiver_id')->unsigned()->nullable();

            $table->text('message');

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
        Schema::dropIfExists('venue_booking_messages');
    }
}
