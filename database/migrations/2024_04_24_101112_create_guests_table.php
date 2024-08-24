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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->nullable()->references('id')->on('groups');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('name');
            $table->string('surname');
            // Todo Add:gender, phone, birthday, birth_country, birth_region, birth_city 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
