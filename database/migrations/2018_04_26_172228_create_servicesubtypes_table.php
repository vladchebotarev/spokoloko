<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesubtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicesubtypes', function (Blueprint $table) {
            $table->integer('service_type_id')->unsigned();
            $table->foreign('service_type_id')->references('id')->on('servicetypes')->onDelete('cascade');

            $table->integer('service_subtype_id')->unsigned();

            $table->string('name');

            $table->primary(['service_type_id', 'service_subtype_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicesubtypes');
    }
}
