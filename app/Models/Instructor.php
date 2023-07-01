<?php

namespace App\Models;
use App\Models\User;
use App\Models\Role;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'major','user_id'];

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
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    
}
