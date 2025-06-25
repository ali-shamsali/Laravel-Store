<?php

namespace App\Livewire\Home\Users;

use App\Models\User;
use Livewire\Component;

class VerifyMobile extends Component
{
    public $user;
    public function mount($id)
    {
        $this->user = User::findorfail($id);
    }

    public function render()
    {
        $user = $this->user ;
        return view('livewire.home.users.verify-mobile', compact('user'))->layout('layouts.auth');
    }
}
