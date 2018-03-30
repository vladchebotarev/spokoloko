<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->string('url');
            $table->text('description');

            //address
            $table->integer('city_id')->unsigned();
            $table->string('street_address');
            $table->string('postal_code');
            $table->string('state');
            $table->float('lat');
            $table->float('lng');

            //phone
            $table->string('phone');
            $table->string('phone2')->nullable();

            //venue info
            $table->string('area');
            $table->string('room_number');
            $table->string('floor_number');
            $table->string('restroom_number'); //WC


            //price info
            $table->decimal('price_hour',8,2);
            $table->decimal('price_day',8,2);
            $table->integer('min_hours');
            $table->text('price_info')->nullable();
            $table->decimal('security_deposit',8,2)->nullable();

            //guests info
            $table->integer('max_guests')->unsigned();
            $table->integer('max_guests_standing')->unsigned();
            $table->integer('max_guests_seating')->unsigned();

            //social links
            $table->text('webpage')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('tripadvisor')->nullable();

            $table->boolean('verified')->default(false);
            $table->integer('package_id')->unsigned()->nullable();

            $table->timestamps();

            //foreign keys
            $table->foreign('user_id')->references('id')->on('users');

            //$table->foreign('package_id')->references('id')->on('venue_package');
            //$table->foreign('city_id')->references('id')->on('cities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
