<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index() {
    return view('login.index', [
        'title' => 'login'
    ]);
  }

  public function authenticate(Request $request) {

   $credentials = $request->validate([
        'email' => 'required|:dns',
        'password' => 'required',
    ]);

    if(Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard')->with(['success' => 'berhasil login']);
    }

    return back()->with(['error' => 'email atau password yang anda masukkan salah!']);

    // dd('berhasil login');
  }



}
