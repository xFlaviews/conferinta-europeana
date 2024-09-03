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
        Schema::create('group_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->references('id')->on('groups');
            $table->foreignId('event_id')->references('id')->on('events');
            $table->timestamps();
            $table->unique(['group_id','event_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_events');
    }
};
