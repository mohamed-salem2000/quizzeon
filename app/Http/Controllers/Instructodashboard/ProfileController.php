<?php

namespace App\Http\Controllers\Instructodashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instructor;

class ProfileController extends Controller
{

    public function index()
    {
        $instructorId = Session::get('instructor_id');
        $user = User::find($instructorId);
        return view('dashboredinstructor.profile', compact('user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $instructorId = Session::get('instructor_id');
        $user = User::find($instructorId);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $user->image = 'images/' . $imageName;
        }
        
        
        $first = $request->input('first');
        $middle = $request->input('middle');
        $last = $request->input('last');
        $location = $request->input('location');
        $phone = $request->input('phone');
        $major = $request->input('major');
        $id=$request->input('id');
        
        $user->first_name = $first;
        $user->middle_name = $middle;
        $user->last_name = $last;
        $user->location = $location;
        $user->phone = $phone;
        $user->save();

        $instructor = Instructor::updateOrCreate(
            ['id' => $instructorId],
            ['major' => $major],
            ['user_id' => $instructorId],
        );
        $instructor->save();
    
        return redirect()->route('instructodashboard')->with('success', 'Data saved successfully!');

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
