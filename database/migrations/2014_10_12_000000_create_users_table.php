<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();;
            $table->string('email')->unique();
            //$table->boolean('email_verified')->default(false);
            $table->string('password')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->boolean('phone_verified')->default(false);
            $table->string('avatar')->default('default-avatar.jpg');
            $table->enum('sex', ['Male', 'Female'])->nullable();
            $table->string('address')->nullable();
            $table->date('birthday')->format('d.m.Y')->nullable();
            $table->text('about')->nullable();
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
