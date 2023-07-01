<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Answer;

use App\Models\Question;

class Exam extends Model
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
    public function subjects(): BelongsTo
    {
        return $this->belongsTo(Subject::class)->withDefault();
    }
    public function answers()
    {
        return $this->hasMany(Answer::class)->withDefault();
    }
    public function marks()
    {
        return $this->hasMany(Mark::class)->withDefault();
    }

}
