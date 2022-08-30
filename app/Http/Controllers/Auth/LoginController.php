<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $remember_me = $request->has('remember_me') ? true : false; 

        if (Auth::attempt($validasi,$remember_me)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
  
  
    //tambahkan script di bawah ini 
    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();
            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb

            if(URL::previous() == "http://127.0.0.1:8000/auth/redirect/login"){
                if($user != null){
                    auth()->login($user, true);
                    return redirect()->intended('/dashboard');
                }else{
                    return redirect('/login')->with('loginGoogleError','Akun belum terdaftar!');
                }
            } else {
                if($user != null){
                    return redirect('/register')->with('registerGoggleError','Akun sudah digunakan!');
                }else{
                    $create = User::Create([
                        'email'             => $user_google->getEmail(),
                        'name'              => $user_google->getName(),
                        'password'          => 0,
                        'status'            => 'Active',
                        'role'              => 'User',
                        'foto'              => $user_google->getAvatar(),
                        'email_verified_at' => now()
                    ]);
            
                    
                    auth()->login($create, true);
                    return redirect()->intended('/dashboard');
                }
            }

            

        } catch (\Exception $e) {
            return redirect()->route('login');
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
