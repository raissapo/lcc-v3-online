<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatbotQuestion extends Model
{
    protected $fillable = ['question_text', 'answer_text'];
}
