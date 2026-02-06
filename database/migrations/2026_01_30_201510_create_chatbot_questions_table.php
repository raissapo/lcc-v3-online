<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('chatbot_questions', function (Blueprint $table) {
        $table->id();
        $table->string('question_text'); // important
        $table->text('answer_text');    // important
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chatbot_questions');
    }
};
