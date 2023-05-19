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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('driver_id')
                ->autoIncrement()
                ->unsigned();
            $table->string('first_name',50);
            $table->string('lastname_name',50);
            $table->enum('gender',['m','f','o'])
                ->default('m');
            $table->date('DOB');
            $table->string('phone',20);
            $table->string('phone1',20)
                ->nullable();
            // validate on input using
            $table->string('email',100,)
                ->unique()
                ->nullable();
            $table->string('address',255);
            $table->string('driver_license_number',25);
            $table->string('license_plate_number',10);
            $table->string('vehicle_model',25);
            $table->integer('rating')
                ->unsigned()
                ->nullable();
            $table->enum('status',['Delivering','Idle','Free'])
                ->default('Free');
            $table->dateTime('last_delivery_time')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
