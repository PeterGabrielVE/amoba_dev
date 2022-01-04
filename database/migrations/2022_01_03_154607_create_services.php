<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('external_id')->nullable();
            $table->integer('external_budget_id')->nullable();
            $table->integer('external_route_id')->nullable();
            $table->integer('track_id')->nullable();
            $table->string('name')->nullable();
            $table->string('notes')->nullable();
            $table->datetime('timestamp')->nullable();
            $table->string('arrival_address')->nullable();
            $table->datetime('arrival_timestamp')->nullable();
            $table->string('departure_address')->nullable();
            $table->datetime('departure_timestamp')->nullable();
            $table->string('pax')->nullable();
            $table->string('confirmed_pax_count')->nullable();
            $table->string('reported_departure_timestamp')->nullable();
            $table->string('reported_departure_kms')->nullable();
            $table->string('reported_arrival_timestamp')->nullable();
            $table->string('reported_arrival_kms')->nullable();
            $table->string('reported_vehicle_plate_number')->nullable();
            $table->string('status_info')->nullable();
            $table->string('reprocess_status')->nullable();
            $table->string('return')->nullable();
            $table->datetime('created')->nullable();
            $table->datetime('modified')->nullable();
            $table->string('synchronized_downstream')->nullable();
            $table->string('synchronized_upstream')->nullable();
            $table->string('province_id')->nullable();
            $table->string('sale_tickets_drivers')->nullable();
            $table->string('notes_drivers')->nullable();
            $table->string('itinerary_drivers')->nullable();
            $table->string('cost_if_externalized')->nullable();
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
