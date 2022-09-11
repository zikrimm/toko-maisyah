<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class DashboardPassword extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;
    
    public function render()
    {
        return view('livewire.dashboard-password');
    }

    public function update(){
        $messages = [
            'min' => 'Password tidak boleh kurang dari 6 karakter.',
            'confirmed' => 'Password harus sama dengan konfirmasi password.',
            'required' => ':attribute wajib diisi.'
        ];
        $validator = $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ],$messages);

        if(!Hash::check($this->current_password, auth()->user()->password)){
            return back()->with('current-password-error','Kata sandi yang diberikan tidak cocok dengan kata sandi Anda saat ini.');
        }
        
        $validator['password'] = bcrypt($validator["password"]);
        
        
        User::where('id', auth()->user()->id)->update(['password' => $validator["password"]]);

        $this->current_password= "";
        $this->password= "";
        $this->password_confirmation= "";
        
        $this->dispatchBrowserEvent(event: 'toastr:info');
        
    }

    public function submit(){
        
    }
}
