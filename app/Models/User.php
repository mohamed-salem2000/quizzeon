<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Instructor;
use App\Models\Student;
class User extends Authenticatable
{
    use HasFactory;
    
    public function roles()
    {
        return $this->belongsTo(Role::class)->withDefault();
    }
    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }
    public function students() 
    {
        return $this->hasMany(Student::class);
    }


}