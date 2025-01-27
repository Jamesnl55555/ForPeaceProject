<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bookmark extends Model
{
    use HasFactory;
    public function  user(): BelongsTo{
        return $this->belongstTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'page'
    ];
}
