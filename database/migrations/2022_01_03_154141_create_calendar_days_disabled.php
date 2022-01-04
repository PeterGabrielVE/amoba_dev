<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarDaysDisabled extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_days_disabled', function (Blueprint $table) {
            $table->id();
            $table->integer('calendar_id')->nullable();
            $table->datetime('day')->nullable();
            $table->integer('enabled')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->datetime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_days_disabled');
    }
}
