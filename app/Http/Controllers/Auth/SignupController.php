<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{

    public function index()
    {
        return view('homepage.register');
    }

    public function indexinstructor()
    {
        return view('homepage.registerinstructor');
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
        ]);
                // save in user table
                $user = new User();
                $user->user_name = strip_tags($request->input('user_name'));
                $user->email = strip_tags($request->input('email'));
                $password = strip_tags($request->input('password'));
                $hashedPassword = Hash::make($password);
                $user->password = $hashedPassword;
                $user->image = 'https://st4.depositphotos.com/9998432/25494/v/450/depositphotos_254942238-stock-illustration-person-gray-photo-placeholder-man.jpg';
                $user->role_id = 3;
                $user->save();
                // end save 
                // start session user and find user
                Session::put('user_id', $user->id);
                $userData = User::find($user->id)->first();
                //  end session user and find user
                return Redirect::route('studentdashboard')->with(compact('userData'));

    }
    public function storeinstructor(Request $request)
    {
        
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
        ]);
                // save in user table
                $user = new User();
                $user->user_name = strip_tags($request->input('user_name'));
                $user->email = strip_tags($request->input('email'));
                $password = strip_tags($request->input('password'));
                $hashedPassword = Hash::make($password);
                $user->password = $hashedPassword;
                $user->image = 'https://st4.depositphotos.com/9998432/25494/v/450/depositphotos_254942238-stock-illustration-person-gray-photo-placeholder-man.jpg';
                $user->role_id = 2;
                $user->save();
                
                // end save 
                // start session user and find user
                Session::put('instructor_id', $user->id);
                $userData = User::find($user->id)->first();
                //  end session user and find user
                return Redirect::route('profile')->with(compact('userData'));
    
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
