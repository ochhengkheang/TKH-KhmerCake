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
            $table->id('product_id')
                ->autoIncrement()
                ->unsigned();
            $table->string('product_name',50)
                ->unique();
            $table->double('price_in',7,2)
                ->unsigned();
            $table->double('price_out',7,2)
                ->unsigned();
            $table->integer('qty_in_stock')
                ->unsigned();
            $table->string('ingredient',255)
                ->nullable();
            $table->string('description',255)
                ->nullable();
            //create foreignId before reference to foreignKey
            $table->foreignId('flavor_id')
                ->unsigned();
            $table->foreign('flavor_id')
                ->references('flavor_id')
                ->on('flavors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('category_id');
            $table->foreign('category_id')
                ->references('category_id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->binary('image')
                ->nullable();
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
