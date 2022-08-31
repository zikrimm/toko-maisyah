<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Notifications\ResetPassword;

class ResetPasswordController extends Controller
{
    public function index($token, Request $request){
        return view('reset-password',[
            'token' => $token,
            'email' => $request->email
        ]);
    }

    public function store(Request $request){
        $messages = [
            'required' => 'Field ini harus diisi!',
            'email' => 'Email yang diisi harus berupa email yang aktif!',
            'confirmed' => 'Konfirmasi Password tidak cocok!',
            'min' => 'Password harus diisi minimal 6 karakter!'
        ];
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ],$messages);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', 'Password kamu telah direset!')
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
