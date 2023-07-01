<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Role;
use App\Models\Exam;
use App\Models\User;
use App\Models\Instructor;
class Student extends Model
{
    use HasFactory;
    public function roles(): BelongsTo
    {
        return $this->belongsTo(Role::class)->withDefault();
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
    public function instructors(): HasMany
    {
        return $this->hasMany(Instructor::class);
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
