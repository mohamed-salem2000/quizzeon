<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class)->withDefault();
    }
    public function subjects(): BelongsTo
    {
        return $this->belongsTo(Subject::class)->withDefault();
    }
    public function exams(): BelongsTo
    {
        return $this->belongsTo(Exam::class)->withDefault();
    }
}
