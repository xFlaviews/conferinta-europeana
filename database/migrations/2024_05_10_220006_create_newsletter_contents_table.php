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
        Schema::create('newsletter_contents', function (Blueprint $table) {
            $table->id();
            $table->json('subject');
            $table->json('formatted_content');
            $table->json('unformatted_content');
            $table->enum('for', ['guests', 'users', 'all'])->default('guests');
            $table->boolean('to_be_sent')->default(false);
            $table->dateTime('start_sending_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletter_contents');
    }
};
