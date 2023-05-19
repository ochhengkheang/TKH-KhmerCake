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
        Schema::create('order_details', function (Blueprint $table) {
            $table->foreignId('order_id')
                ->unsigned();
            $table->foreign('order_id')
                ->references('order_id')
                ->on('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('product_id')
                ->unsigned();
            $table->foreign('product_id')
                ->references('product_id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('discount_id')
                ->unsigned();
            $table->foreign('discount_id')
                ->references('discount_id')
                ->on('discounts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('qty')
                ->unsigned();
            $table->double('price_out',7,2)
                ->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
