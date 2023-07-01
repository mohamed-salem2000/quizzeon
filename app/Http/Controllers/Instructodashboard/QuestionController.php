<?php

namespace App\Http\Controllers\Instructodashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
class QuestionController extends Controller
{

    public function index()
    {
        $instructorId = Session::get('instructor_id');
        $questions = Question::whereHas('exams', function ($query) use ($instructorId) {
            $query->where('instructor_id', $instructorId);
        })->get();
                    
        return view('dashboredinstructor.question',compact('questions'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
