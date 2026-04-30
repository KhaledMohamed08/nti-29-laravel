<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255'
        ]);

        if (Auth::attempt($data)) {
            // $user = User::where('email', $data['email'])->first();
            // dd($user);
            // Auth::login($user);

            $request->session()->regenerate(); //login
            
            return redirect()->route('posts.index');
        } else {
            
            return redirect()->back()->with('error', 'Incorrect Data');
        }

    }

    public function RegisterForm()
    {
        return view('auth.register');
    }

    public function Register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string'
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        
        // Profile::created([
        //     'user_id' => $user->id
        // ]);

        Auth::login($user);

        return redirect()->route('posts.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('posts.index');
    }
}
