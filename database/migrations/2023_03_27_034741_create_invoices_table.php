<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->integer('invoice_number');
            $table->date('invoice_date');
            $table->date('delivery_date');

            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer');

            $table->unsignedInteger('order_status_id');
            $table->foreign('order_status_id')->references('id')->on('order_statuses');

            $table->unsignedInteger('delivery_policy_id');
            $table->foreign('delivery_policy_id')->references('id')->on('delivery_policies');

            $table->unsignedInteger('payment_policy_id');
            $table->foreign('payment_policy_id')->references('id')->on('payment_policies');

            $table->decimal('subtotal');
            $table->decimal('tax_value');
            $table->decimal('total');
            
            $table->string('note');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
