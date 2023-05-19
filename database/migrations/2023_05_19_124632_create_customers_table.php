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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id')
                ->autoIncrement()
                ->unsigned();
            $table->string('username',50)
                ->unique();
            $table->string('password',50);
            $table->string('first_name',50);
            $table->string('lastname_name',50);
            $table->enum('gender',['M','F','O'])
                ->default('M');
            $table->date('DOB');
            $table->string('phone',20);
            $table->string('phone1',20)
                ->nullable();
            // validate on input using
            $table->string('email',100,)
                ->unique()
                ->nullable();
            $table->string('address',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
