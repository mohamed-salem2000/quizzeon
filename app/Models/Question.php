<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;
use App\Models\Exam;
class Question extends Model
{
    use HasFactory;
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    public function exams()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }
    public function answers ()
    {
        return $this->hasMany(Answer::class);
    }

    
}
