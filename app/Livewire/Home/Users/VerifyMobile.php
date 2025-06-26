<?php

namespace App\Livewire\Home\Users;

use App\Models\home\Token;
use App\Models\User;
use Livewire\Component;

class VerifyMobile extends Component
{
    public $user;
    public $code;
    public function mount($id)
    {
        $this->user = User::findorfail($id);
        $this->code = Token::where('user_id',$id)->latest()->first();
    }

    public function render()
    {
        dd($this->code);
        $user = $this->user ;
        return view('livewire.home.users.verify-mobile', compact('user'))->layout('layouts.auth');
    }
}
