<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    use HasFactory;

    public function  questions(): HasMany{
        return $this->hasMany(Question::class);
    }
    protected $fillable = [
        'name',
        'description',
        'type',
        'score'
    ];
}
