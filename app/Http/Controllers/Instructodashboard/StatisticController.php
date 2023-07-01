<?php

namespace App\Http\Controllers\Instructodashboard;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Answer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('exams')
        ->join('users', 'exams.student_id', '=', 'users.id')
        ->join('subjects', 'exams.subject_id', '=', 'subjects.id')
        ->where('exams.instructor_id', 2)
        ->select('users.*', 'exams.*', 'subjects.*')
        ->get();
        $userIds = $users->pluck('student_id');
        $correctAnswers = DB::table('answers')
        ->whereIn('student_id', $userIds)
        ->pluck('correct_answer');
        $mark = $correctAnswers->sum();
        $correctAnswersCount = count($correctAnswers);
        return view ('dashboredinstructor.Statistics',compact('users','mark','correctAnswersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

public function show($id)
{
    $correctAnswers = Answer::where('student_id', 3)
    ->join('questions', 'answers.question_id', '=', 'questions.id')
    ->select('answers.answer', 'answers.correct_answer', 'questions.description')
    ->get();

    return $correctAnswers;
}

    public function edit($id)
    {
        
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
