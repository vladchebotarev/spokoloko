<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->integer('user_id')->unsigned();
            $table->integer('service_type_id')->unsigned();
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


            //social links
            $table->text('webpage')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();

            $table->boolean('verified')->default(false);
            $table->integer('package_id')->unsigned()->nullable();

            $table->timestamps();

            //foreign keys
            $table->foreign('user_id')->references('id')->on('users');

            //$table->foreign('package_id')->references('id')->on('venue_package');
            //$table->foreign('city_id')->references('id')->on('cities');
            //$table->foreign('service_type_id')->references('id')->on('servicetypes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
