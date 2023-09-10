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
            $table->string('page_heading');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('meta_keywords');
            $table->text('meta_description');
            $table->string('photo');
            $table->string('SKU');
            $table->decimal('price')->nullable();
            $table->integer('length');
            $table->integer('height');
            $table->integer('width');
            $table->integer('weight');
            $table->string('main_image');
            $table->boolean('available_pos');
            $table->integer('min_quantity');
            $table->boolean('status');
            $table->string('alias')->unique();
            $table->string('weight_unit_id');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedInteger('manufacturer_id');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('cascade');

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
