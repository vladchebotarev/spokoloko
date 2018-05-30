<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookColumnsToVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {

            $table->text('full_description');

            $table->integer('venue_style_id')->unsigned()->nullable();
            $table->foreign('venue_style_id')->references('id')->on('venuestyles');

            $table->text('additional_rules')->nullable();
            $table->enum('availability_type', ['Reservation', 'Week'])->nullable();

            $table->boolean('price_depends_on_weekday')->default(false);
            $table->text('additional_price_information')->nullable();

            $table->integer('days_full_refund')->unsigned()->nullable();
            $table->text('cancellation_information')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropColumn('full_description');
            $table->dropColumn('venue_style_id');
            $table->dropColumn('additional_rules');
            $table->dropColumn('availability_type');
            $table->dropColumn('price_depends_on_weekday');
            $table->dropColumn('additional_price_information');
            $table->dropColumn('days_full_refund');
            $table->dropColumn('cancellation_information');
        });
    }
}
