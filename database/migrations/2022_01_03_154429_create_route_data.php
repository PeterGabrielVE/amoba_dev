<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_data', function (Blueprint $table) {
            $table->id();
            $table->integer('route_id')->nullable();
            $table->integer('calendar')->nullable();
            $table->string('vinculation_route')->nullable();
            $table->integer('route_circular')->nullable();
            $table->datetime('date_init')->nullable();
            $table->datetime('date_finish')->nullable();
            $table->integer('mon')->nullable();
            $table->integer('tue')->nullable();
            $table->integer('wed')->nullable();
            $table->integer('thu')->nullable();
            $table->integer('fri')->nullable();
            $table->integer('sat')->nullable();
            $table->integer('sun')->nullable();
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
        Schema::dropIfExists('route_data');
    }
}
