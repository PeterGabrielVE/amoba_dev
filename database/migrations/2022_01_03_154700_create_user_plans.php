<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('next_user_plan_id')->nullable();
            $table->datetime('start_timestamp')->nullable();
            $table->datetime('end_timestamp')->nullable();
            $table->datetime('renewal_timestamp')->nullable();
            $table->integer('renewal_price')->nullable();
            $table->integer('requires_invoice')->nullable();
            $table->datetime('created')->nullable();
            $table->datetime('modified')->nullable();
            $table->integer('financiaton')->nullable();
            $table->integer('status_financiation')->nullable();
            $table->integer('language')->nullable();
            $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->integer('pending_payment')->nullable();
            $table->string('date_max_payment')->nullable();
            $table->string('proxim_start_timestamp')->nullable();
            $table->datetime('proxim_end_timestamp')->nullable();
            $table->datetime('proxim_renewal_timestamp')->nullable();
            $table->string('proxim_renewal_price')->nullable();
            $table->string('credits_return')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('cancel_omployee')->nullable();
            $table->integer('force_renovation')->nullable();
            $table->string('date_canceled')->nullable();
            $table->string('amount_confirm_canceled')->nullable();
            $table->string('credit_confirm_canceled')->nullable();
            $table->integer('cost_center_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_plans');
    }
}
