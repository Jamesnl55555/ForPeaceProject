<?php

namespace App\Models;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Option extends Model
{
    use HasFactory;

    public function question(): BelongsTo{
        return $this->belongsTo(Question::class);
    }
    public function answer(): HasOne{
        return $this->hasOne(Answer::class);
    }
    protected $fillable = [
        'question_id',
        'option_text',
        'status',
    ];
}
