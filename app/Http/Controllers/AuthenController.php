<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('member.dashboard');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register()
    {
        $data = request()->validate([
            'email' => "required|email|unique:users",
            'password' => "required|confirmed"
        ]);

        $user = User::query()->create($data);
        UserDetail::query()->create([
            'user_id' => $user->id,
        ]);

        Auth::login($user);
        request()->session()->regenerate();

        return redirect()->route('member.dashboard');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
