<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login()
  {
    $data['title'] = 'Login';
    $data['active'] = 'login';
    $data['content'] = 'template/templatedark';
    return view('login', $data);
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('/dashboard');
    }

    return back()->with('loginError', 'Login Gagal!');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
