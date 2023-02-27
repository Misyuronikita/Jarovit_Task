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
            $table->decimal('main_price');
            $table->integer('sale')->nullable();
            $table->boolean('is_stock');
            $table->text('description');

            $table->unsignedBigInteger('category_id');
            $table->index('category_id', 'product_category_idx');
            $table->foreign('category_id', 'product_category_fk')->references('id')->on('categories');

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
