<?php
namespace App\Http\Controllers\Studentdashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Option;

class StudentExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        
        $exams = Exam::where('student_id', 3)->get();
        return view('studentdashboard.exam', compact('exams'));

    }


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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::with('options')->where('exam_id', $id)->get();
        $questionData = [];

        $questionData = [];

        foreach ($questions as $question) {
            $questionText = $question->description;
            $options = $question->options;
            $question_type = $question->question_type;
        
            // Perform any necessary operations with the question and options
        
            // Add the question data to the array
            $questionData[] = [
                'id' => $id,
                'questionText' => $questionText,
                'options' => $options,
                'questionType' => $question_type,
            ];
        }
        $exam = Exam::find($id);
        return view('studentdashboard.question', compact('questionData','exam'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
