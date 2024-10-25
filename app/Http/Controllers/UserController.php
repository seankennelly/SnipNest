<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
      return view('users.register');
    }

    // Create New User
    public function store(Request $request) {
      $formFields = $request->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'confirmed', 'min:6'],
      ]);

      // Hash password
      $formFields['password'] = bcrypt($formFields['password']);

      // Create User
      $user = User::create($formFields);

      Auth::login($user);

      return redirect('/')->with('message', 'User created. You are now logged in');
    }

    // Log User Out
    public function logout(Request $request) {
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/')->with('message', 'Logged out');
    }

    // Show Login Form
    public function login() {
      return view('users.login');
    }

    // Authenticate User (Log In)
    public function authenticate(Request $request) {
      $formFields = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
      ]);

      if(Auth::attempt($formFields)) {
        $request->session()->regenerate();
        return redirect('/')->with('message', 'You are now logged in');
      }

      return back()->withErrors(['email' => 'Email and/or password is not correct'])->onlyInput('email');
    }
}