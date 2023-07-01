<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class)->withDefault();
    }
    public function exams(): BelongsTo
    {
        return $this->belongsTo(Exam::class)->withDefault();
    }
    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class)->withDefault();
    }
    public function options(): BelongsTo
    {
        return $this->belongsTo(Option::class)->withDefault();
    }

    
}
