<?php

namespace App\Http\Controllers\Instructodashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Option;
use App\Models\Question;
use App\Models\Exam;
use Illuminate\Support\Facades\Hash;



class ExamController extends Controller
{

    public function index()
    {
        $instructorId = Session::get('instructor_id');
        $subjects = Subject::where('instructor_id', $instructorId)->get();
        $exams = Exam::where('instructor_id', $instructorId)->get();
        return view('dashboredinstructor.exam', compact('subjects','exams'));
    }

    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $instructorId = Session::get('instructor_id');
        $exam = new Exam();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $exam->image = 'images/' . $imageName;
        }
    $validatedData = $request->validate([
        'date' => 'required',
        'time' => 'required',
        'name' => 'required',
        'price' => '',
        'password' => '',
        'selectedplane' => '',
        'hours' => 'required|integer|min:0|max:24',
        'minutes' => 'required|integer|min:0|max:59',
        'selectedSubject' => 'required',
    ]);
    
    $hours = $request->input('hours');
    $minutes = $request->input('minutes');
    $duration = ($hours * 60) + $minutes;
    $exam->date = $request->input('date');
    $exam->deuration = $duration;
    $exam->time = $request->input('time');
    $exam->plane = $request->input('selectedplane');
    $exam->price = $request->input('price');
    $password = $request->input('password');
    $hashedPassword = Hash::make($password);
    $exam->password = $hashedPassword;
    $exam->	exam_name = $request->input('name');
    $exam->subject_id = $request->input('selectedSubject');
    $exam->instructor_id=$instructorId ;
    $exam->save();
    return redirect()->back()->with('success', 'Exam created successfully.');
    }


public function addquestion(Request $request)
{
    $question = new Question;
    $examid = $request->input('examid');
    $description = $request->input('description');
    $question->exam_id = $examid;
    $question->description = $description;
    $question->question_type = $request->input('selectoption');
    $question->save();
    $lastQuestion = Question::latest()->first();

    $optionCount = $request->input('optionCount');
    for ($i = 0; $i < $optionCount; $i++) {
        $isCorrect = isset($request->input('correct')[$i]);
        $option = new Option();

        if ($request->input('selectoption') == '3' && $request->hasFile('option.' . $i)) {
            $image = $request->file('option.' . $i);
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $option->option_text = 'images/' . $imageName;
            $option->question_id = $lastQuestion->id;
            $option->is_correct = $isCorrect;
            $option->save();
        }
        
    
        elseif ($request->input('selectoption') == '4') {
            $leftOptions = $request->input('leftOption', []);
            $rightOptions = $request->input('rightOption', []);
            if (isset($leftOptions[$i]) && isset($rightOptions[$i])) {
                $leftOptionText = $leftOptions[$i];
                $rightOptionText = $rightOptions[$i];

                $option = new Option();
                $option->option_text = $leftOptionText;
                $option->question_id = $lastQuestion->id;
                $option->is_correct = $rightOptionText;
                $option ->save();
    
            } 
        } 


        else {
            $optionText = isset($request->input('option')[$i]) ? $request->input('option')[$i] : '';
            $option->option_text = $optionText;
            $option->question_id = $lastQuestion->id;
            $option->is_correct = $isCorrect;
            $option->save();
        }


        
    }

    return redirect()->back()->with('success', 'question created successfully.');
}


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
                'questionText' => $questionText,
                'options' => $options,
                'questionType' => $question_type,
            ];
        }
        
        return view('dashboredinstructor.question', compact('questionData'));
        

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