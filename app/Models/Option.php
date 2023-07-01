<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Option extends Model
{
    use HasFactory;
    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class)->withDefault();
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
