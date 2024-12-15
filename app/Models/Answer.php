<?php

namespace App\Models;

use App\Models\Question;
use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Answer extends Model
{
    use HasFactory;

    public function question(): BelongsTo{
        return $this->belongsTo(Question::class);
    }
    public function option(): BelongsTo{
        return $this->belongsTo(Option::class);
    }
    protected $fillable = [
        'question_id',
        'answer',
        'type',
    ];
}
