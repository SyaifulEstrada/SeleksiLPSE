<?php

namespace App\Http\Controllers;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function login(Request $request)  {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Login gagal, email atau password salah'],
            ]);
        }

        return $user->createToken('authenticated_user')->plainTextToken;

    }

    public function logout(Request $request)  {
        $request->user()->tokens()->delete();

        return "Berhasil Logout";
    }

    function show(Request $request)  {
        return response()->json(Auth::user());
    }

}
