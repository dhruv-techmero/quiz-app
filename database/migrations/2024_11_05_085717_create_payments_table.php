<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('plan_id')->index();
            $table->string('payment_method')->nullable();  // E.g., 'card', 'paypal', 'stripe'
            $table->string('payment_status')->default('pending');  // E.g., 'pending', 'completed', 'failed'
            $table->string('currency', 3)->default('USD');  // Currency used for payment (3-character code)
            $table->unsignedInteger('amount_in_cents');  // Store amount in cents to avoid float issues
            $table->text('payment_gateway_response')->nullable();  // Store payment provider's response
            $table->timestamp('payment_date')->nullable();  // Date and time the payment was completed
            $table->boolean('refunded')->default(false);  // Flag if the transaction was refunded
            $table->string('coupon_code')->nullable();  // Store coupon code if used
            $table->string('subscription_id')->nullable();  // Store subscription ID if applicable
            $table->text('billing_address')->nullable();  // Store billing address if required
            $table->float('refunded_amount')->default(0);  // Store refunded amount if applicable
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
        Schema::dropIfExists('payments');
    }
};
