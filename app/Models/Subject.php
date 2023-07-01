<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\Mark;
class Subject extends Model
{
    use HasFactory;
    public function instructors(): BelongsTo
    {
        return $this->belongsTo(Instructor::class)->withDefault();
    }
    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class)->withDefault();
    }
    public function exams(): BelongsTo
    {
        return $this->hasMany(Exam::class)->withDefault();
    }
    public function marks()
    {
        return $this->hasMany(Mark::class)->withDefault();
    }

}
