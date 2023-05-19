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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id('discount_id')
                ->autoIncrement()
                ->unsigned();
            $table->integer('discount')
                ->unsigned();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreignId('product_id')
                ->unsigned();
            $table->foreign('product_id')
                ->references('product_id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
