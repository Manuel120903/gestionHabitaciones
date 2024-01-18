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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->date('date');
            $table->double('subtotal', 8, 2);

            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('bedroom_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('bedroom_id')->references('id')->on('bedrooms');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
