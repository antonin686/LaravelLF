<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function verify(Request $request)
    {
        $user = User::where('username', $request->username)
                ->where('password', $request->password)
                ->first();
        if($user)
        {
            $request->session()->put('username', $request->username);
            $request->session()->put('role', $user->role_id);
            $request->session()->put('userid', $user->id);
            return redirect()->route('home.index');
        }else{
            echo "invalid username or password";
        }
        
    }

    function create(Request $request)
    {
        $user = new User();
        
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role_id = 2;

        $user->save();

        return redirect()->route('login.index');
    }

    function logout(Request $request)
    {
        return redirect()->route('login.index');
    }

    function register(Request $request)
    {
        return view('register');
    }
}
