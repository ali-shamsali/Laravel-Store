<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.home.users.login')->layout('layouts.auth');
    }
}
