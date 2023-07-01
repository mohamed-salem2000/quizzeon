<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;

use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
    $credentials = $request->only('email', 'password');
    
    if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
        $user = \Illuminate\Support\Facades\Auth::user();
        if ($user->role_id == 1) {
            
            Session::put('admin_id', $user->id);
            return redirect()->intended('admin');
        }  
        
        elseif ($user->role_id == 3) {

            Session::put('student_id', $user->id);
            $userData = User::find($user->id);
            return redirect()->intended('studentprofile');
        } 

        elseif ($user->role_id == 2) {
            Session::put('instructor_id', $user->id);
            $userData = User::find($user->id)->first();
            return Redirect::route('instructodashboard')->with(compact('userData'));
        } 

        else {

            Session::put('user_type', 'default');
            Session::put('user_name', $user->name);
            return redirect()->intended('/');
        }
    } else {
        return redirect()->back()->withErrors(['email' => 'Invalid email or password password .']);
    }
}

    

}
