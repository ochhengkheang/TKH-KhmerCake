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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id('delivery_id')
                ->autoIncrement()
                ->unsigned();
            $table->foreignId('driver_id')
                ->unsigned();
            $table->foreign('driver_id')
                ->references('driver_id')
                ->on('drivers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('order_id')
                ->unsigned();
            $table->foreign('order_id')
                ->references('order_id')
                ->on('orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('delivery_date');
            $table->string('delivery_address',255);
            $table->enum('delivery_status',['Delivering','Idle','Free'])
                ->default('Free');
            $table->string('delivery_note',255)
                ->nullable();
            $table->double('delivery_cost',7,2)
                ->unsigned();
            $table->string('tracking_number',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
