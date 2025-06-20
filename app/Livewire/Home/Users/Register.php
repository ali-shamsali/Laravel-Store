<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public user $user;
    public $name, $mobile, $password, $password_confirmation;
    public function mount()
    {
        $this->user = new User();
    }

    protected $rules = [
        'name' => 'required|min:5',
        'mobile' => 'required|ir_mobile|unique:mysql.users',
        'password' => 'required|min:3|confirmed',
    ];

    public function registerform()
    {
        $this->validate();
        $this->user->name       = $this->name;
        $this->user->mobile     = $this->mobile;
        $this->user->password   = $this->password;
        User::create([
            'name' => $this->user->name ,
            'email' => 'test@gmail.com' ,
            'mobile' => $this->user->mobile ,
            'password' => Hash::make($this->user->password),
        ]);
    }


    public function render()
    {
        return view('livewire.home.users.register')->layout('layouts.auth');
    }
}
