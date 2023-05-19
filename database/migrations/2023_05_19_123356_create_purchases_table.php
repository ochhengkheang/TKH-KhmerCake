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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id('purchase_id')
                ->autoIncrement()
                ->unsigned();
            $table->double('amount',10,2)
                ->unsigned();
            $table->dateTime('purchase_date');
            $table->foreignId('supplier_id')
                ->unsigned();
            $table->foreign('supplier_id')
                ->references('supplier_id')
                ->on('suppliers')
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
        Schema::dropIfExists('purchases');
    }
};
