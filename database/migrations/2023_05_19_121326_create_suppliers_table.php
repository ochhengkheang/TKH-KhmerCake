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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('supplier_id')
                ->autoIncrement()
                ->unsigned();
            $table->string('company_name',50)
                ->unique();
            $table->string('contact_person',50);
            $table->string('phone',20);
            $table->string('phone1',20)
                ->nullable();
            // validate on input using
            $table->string('email',100,)
                ->unique()
                ->nullable();
            $table->string('address',255);
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
        Schema::dropIfExists('suppliers');
    }
};
