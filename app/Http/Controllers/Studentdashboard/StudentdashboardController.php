<?php

namespace App\Http\Controllers\Studentdashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Instructor;
use App\Models\User;

class StudentdashboardController extends Controller
{

    public function index()
    {
$student_id = 3;

$subjects = Subject::where('student_id', $student_id)->get();

$users = User::whereIn('id', function ($query) use ($subjects) {
    $query->select('user_id')
        ->from('instructors')
        ->whereIn('id', $subjects->pluck('instructor_id'));
})->get();
return view('studentdashboard.subject', compact('subjects','users'));
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
    
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
