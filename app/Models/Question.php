<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Option;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Question extends Model
{
    use HasFactory;

    public function test(): BelongsTo{
        return $this->belongsTo(Test::class);
    }
    public function options(): HasMany{   
        return $this->hasMany(Option::class);
    }

    protected $fillable = [
        'test_id',
        'text',
        'type',
    ];
}
