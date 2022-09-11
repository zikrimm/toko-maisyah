<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(Request $request){
        return view('register.index');
    }

    public function register(Request $request){
        $messages = [   
            'required'  => 'Field ini tidak boleh kosong!',
            'unique'    => 'Email ini sudah digunakan!',
            'confirm'   => 'Password yang dimasukkan tidak cocok!',
            'min'       => 'Password tidak boleh kurang dari 6 karakter!',
            'confirmed' => 'Konfirmasi Password tidak cocok!'
        ];
        $validatedData = $request->validate([
            'email'                 => 'required|email|unique:users,email',
            'name'                  => 'required',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ], $messages);

        $validatedData['password'] = bcrypt($validatedData["password"]);
        $validatedData["role"] = "User";
        $validatedData["status"] = "active";

        User::create($validatedData);
        return back()->with('success','Registrasi berhasil! Silahkan login');
    }
}
