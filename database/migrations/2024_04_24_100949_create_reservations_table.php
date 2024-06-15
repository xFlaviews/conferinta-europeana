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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->references('id')->on('hotels');
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->foreignId('main_user_id')->references('id')->on('users');
            $table->decimal('price',8,2)->nullable();
            $table->date('checkin');
            $table->date('checkout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
