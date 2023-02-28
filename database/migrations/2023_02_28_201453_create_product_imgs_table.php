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
        Schema::create('product_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('product_id');
            $table->index('product_id', 'product_img_product_idx');

            $table->foreign('product_id', 'product_img_product_fk')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_imgs');
    }
};
