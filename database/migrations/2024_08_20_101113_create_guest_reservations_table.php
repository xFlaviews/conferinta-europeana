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
        Schema::create('guest_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->references('id')->on('guests');
            $table->foreignId('group_id')->nullable()->references('id')->on('groups');
            $table->foreignId('reservation_id')->references('id')->on('reservations');
            $table->date('checkin');
            $table->date('checkout');
            $table->decimal('room_price',8,2);
            $table->decimal('extras_price',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_reservations');
    }
};
