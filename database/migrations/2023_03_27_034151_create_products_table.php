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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');           
            $table->text('description');            
            $table->string('SKU');
            $table->string('barcode');
            $table->decimal('cost')->nullable();
            $table->decimal('sales_price')->nullable();            
            $table->integer('min_quantity');
            $table->integer('quantity');
            $table->boolean('status');
            $table->boolean('canBePurchased');
            $table->boolean('canBeSold');
            $table->string('weight_unit_id');
            $table->integer('length');
            $table->integer('height');
            $table->integer('width');
            $table->integer('weight');
            $table->string('image');
            $table->foreignId('tax_id')->constrained('taxes');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('brand_id')->constrained('brands');
            $table->text('notes'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
