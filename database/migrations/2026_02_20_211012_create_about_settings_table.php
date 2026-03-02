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
        Schema::create('about_settings', function (Blueprint $table) {
            $table->id();
            $table->string('header_image')->nullable();
            $table->longText('about_description')->nullable();
            $table->longText('history')->nullable();
            $table->longText('vision_mission')->nullable();
            $table->longText('contact_info')->nullable();
            $table->longText('campuses')->nullable();
            $table->string('hymn_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};
