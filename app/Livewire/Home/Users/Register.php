<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.home.users.register')->layout('layouts.auth');
    }
}
