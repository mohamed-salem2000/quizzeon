<?php

namespace App\Http\Controllers\Instructodashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{

    public function index()
    {   
        $instructorId = Session::get('instructor_id');
        $subjects = Subject::where('instructor_id', $instructorId)->get();
        return view('dashboredinstructor.subject', compact('subjects'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'section' => 'required|string',
        ]);
    
        $instructorId = Session::get('instructor_id');
    
        // Check if the instructor record exists
        $subject = new Subject();
        $subject->subject_name = $validatedData['name'];
        $subject->description = $validatedData['description'];
        $subject->section = $validatedData['section'];
        $subject->instructor_id = $instructorId;
    
        $subject->save();
    
        return back()->with('success', 'Subject created successfully');
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
        
        $name = $request->input('name');
        $description = $request->input('description');
        $section = $request->input('section');
    
        // Find the subject record by ID
        $subject = Subject::find($id);
        
        if ($subject) {
            // Update the subject record with the new values
            $subject->subject_name = $name;
            $subject->description = $description;
            $subject->section = $section;
            $subject->update();
    
            return redirect()->back()->with('success', 'Subject updated successfully');
        } else {
            return redirect()->back()->with('error', 'Subject not found');
        }
    }


    public function destroy($id)
    {
        $subject = Subject::find($id);
    
        if ($subject) {
            $subject->delete();
            return redirect()->back()->with('success', 'Subject deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Subject not found.');
        }
    }
}