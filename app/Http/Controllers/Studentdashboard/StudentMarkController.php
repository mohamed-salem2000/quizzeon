<?php

namespace App\Http\Controllers\Studentdashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentMarkController extends Controller
{

    public function index()
    {
    $studentId = 3;
    $mark = Mark::where('student_id', $studentId)->value('mark');
        return view('studentdashboard.mark');

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

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
