<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->unique();
            $table->rememberToken()->nullable();
            $table->string('password');
            $table->datetime('last_online');
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->bigInteger('status')->nullable();
            $table->bigInteger('first')->nullable();
            $table->datetime('last_accept_date')->nullable();
            $table->datetime('created')->nullable();
            $table->datetime('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->double('credits', 8, 2)->nullable();
            $table->integer('first_trip')->nullable();
            $table->integer('incomplete_profile')->nullable();
            $table->integer('phone_verify')->nullable();
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('no_registered')->nullable();
            $table->datetime('deleted_at')->nullable();
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
