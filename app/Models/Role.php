<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Student;

class Role extends Model
{
    use HasFactory;
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function instructors(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
