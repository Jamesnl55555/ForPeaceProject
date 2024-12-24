<?php

namespace App\Models;

use App\Models\Question;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Test extends Model
{
    use HasFactory;

    public function  questions(): HasMany{
        return $this->hasMany(Question::class);
    }
    public function  user(): BelongsTo{
        return $this->belongstTo(User::class);
    }
    protected $fillable = [
        'name',
        'user_id',
        'type',
        'question_quantity',
        'score'
    ];
}
