<?php

namespace App\Livewire\Home\Users;

use App\Models\home\Token;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class VerifyMobile extends Component
{
    public $user;
    public $digit1, $digit2, $digit3, $digit4, $digit5;
    public $message;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
    }

    public function verifyCode()
    {
        $code_input = $this->digit1 . $this->digit2 . $this->digit3 . $this->digit4 . $this->digit5;

        $token = Token::where('user_id', $this->user->id)
            ->where('exp_at', '>', Carbon::now())
            ->latest()
            ->first();

        if (! $token) {
            $this->message = '⏰ کد منقضی شده است. لطفاً دوباره تلاش کنید.';
            return;
        }

        if ($code_input == $token->code) {
            $this->user->update(['mobile_verified_at' => Carbon::now()]);
            $token->delete();
            Auth::loginUsingId($this->user->id);
            return redirect()->route('admin');
        } else {
            $this->message = 'کد اشتباه است.';
        }
    }

    public function render()
    {
        return view('livewire.home.users.verify-mobile', [
            'user' => $this->user,
            'message' => $this->message
        ])->layout('layouts.auth');
    }
}
