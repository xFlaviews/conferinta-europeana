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
        Schema::create('newsletter_sents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('newsletter_content_id')->references('id')->on('newsletter_contents');
            $table->foreignId('newsletter_consent_id')->references('id')->on('newsletter_consents');
            $table->dateTime('to_be_sent_at');
            $table->boolean('was_sent')->default(false);
            $table->unique(['newsletter_content_id','newsletter_consent_id'],'unique_content_consent_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletter_sents');
    }
};
