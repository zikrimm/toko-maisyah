<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;


class ForgotPasswordController extends Controller
{
    public function index() {
        return view('forgot-password');
    }

    public function store(Request $request) {
        $messages = [
            'required' => 'Field ini harus diisi!',
            'email' => 'Email yang diisi harus berupa email yang aktif!'
        ];

        $request->validate([
            'email' => 'required|email'
        ],$messages);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => 'Email telah dikirim!' ])
                    : back()->withErrors(['email' => __($status)]);
    }
}
