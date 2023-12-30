<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Register extends Component
{
    public $name = '';
    public $username = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $checkboxMarcado = false;

    public function mount()
    {
        if (auth()->user()) {
            return redirect()->intended('/dashboard');
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email:rfc,dns|unique:users']);
    }

    public function register()
    {

        $this->validate([
            'email'         => 'required',
            'password'      => 'required|min:6',
            'name'          => 'required|min:3|alpha',
            'username'      => 'required|min:3'
        ]);

        $user = User::create([
            'name'          =>$this->name,
            'user_name'     =>$this->username,
            'email'         =>$this->email,
            'password'      =>Hash::make($this->password),
            'remember_token'=>Str::random(10),
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function activeOrNotBtnCadastrar(){
        $this->checkboxMarcado = !$this->checkboxMarcado;
    }
}
