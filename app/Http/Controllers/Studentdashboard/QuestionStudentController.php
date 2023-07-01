<?php

namespace App\Http\Controllers\Studentdashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Answer;
use App\Models\Option;
use App\Models\Mark;
use Illuminate\Http\Request;

class QuestionStudentController extends Controller
{

    public function index()
    {
        
    }


    public function create()
    {
    
    }
    public function store(Request $request)
    {
        $questionData = json_decode($request->input('questionData'), true);
        $answers = $request->input('answers');
        $questionIds = $request->input('question_ids');
        $optionsIds = $request->input('options_ids');
        $examId = $request->input('examid');
    
        foreach ($questionData as $index => $question) {
            $selectedAnswer = $answers[$index + 1];
            $correctAnswers = [];
            $allMatch = true;

            foreach ($question['options'] as $option) {
                if ($question['questionType'] == 4) {
                    $optionId = $option['id'];
                    $optionIsCorrect = $option['is_correct'];
                    
                    if (is_array($selectedAnswer) && isset($selectedAnswer[$optionId]) && $selectedAnswer[$optionId] == $optionIsCorrect) {
                        $correctAnswers[] = $optionId;
                    } else {
                        $allMatch = false;
                    }
                } else {
                    if ($option['is_correct'] == 1) {
                        $correctAnswers[] = $option['id'];
                    }
                }
            }
    
            $isAnswerCorrect = ($question['questionType'] == 2) 
                ? array_diff($selectedAnswer, $correctAnswers) === [] && array_diff($correctAnswers, $selectedAnswer) === []
                : in_array($selectedAnswer, $correctAnswers);
    
            $answer = ($allMatch && $isAnswerCorrect) ? 1 : 0;
    
            $answerModel = new Answer;
            
            $answerModel->question_id = $questionIds[$index + 1][0];
            $answerModel->student_id = 3;
            
            if ($question['questionType'] == 4) {
                $answerModel->correct_answer = $allMatch ? 1 : 0;
            } else {
                $answerModel->correct_answer = $answer;
            }
            
            $answerModel->exam_id = $examId;
    
            if ($question['questionType'] == 4) {
                $answerText = array_values($selectedAnswer); 
                $answerModel->answer = implode(', ', $answerText);
            } else {
                $answerText = [];
                if (is_array($selectedAnswer)) {
                    foreach ($selectedAnswer as $answerId) {
                        $option = Option::find($answerId);
                        if ($option) {
                            $answerText[] = $option->option_text;
                        }
                    }
                } else {
                    $option = Option::find($selectedAnswer);
                    if ($option) {
                        $answerText[] = $option->option_text;
                    }
                }
                $answerModel->answer = implode(', ', $answerText);
            }
            $answerModel->save();
        }
        
        $studentId = 3;
        
        $correctAnswers = Answer::where('student_id', $studentId)
                                ->where('exam_id', $examId)
                                ->pluck('correct_answer')
                                ->all();
                                $markCount = 0;
                                foreach ($correctAnswers as $answer) {
                                    if ($answer == '1') {
                                        $markCount++;
                                    }
                                }
        $mark = new Mark();
        $mark->mark = $markCount;
        $mark->exam_id = $examId;
        $mark->subject_id = 1;
        $mark->student_id = $studentId;
        $mark->submit = 1;
        $mark->save();
return Redirect::route('studentexam');

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