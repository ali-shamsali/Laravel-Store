<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\home\Token;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\Log; 

class Resetpassword extends Component
{
    public $user;
    public $code_input = ['', '', '', '', '']; 
    public $password;
    public $password_confirmation;
    public $message;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
    }

    public function resetPassword()
    {
        $this->validate([
            'code_input' => 'required|array',
            'code_input.*' => 'required|digits:1',
            'password' => 'required|min:6|confirmed',
        ]);

        $code = trim(implode('', $this->code_input));

        $token = Token::where('user_id', $this->user->id)
            ->where('type', 'password_reset')
            ->latest()
            ->first();

        if (! $token) {
            $this->message = 'کد پیدا نشد یا منقضی شده است.';
            return;
        }

        if ($token->exp_at && Carbon::parse($token->exp_at)->lt(now())) {
            $this->message = 'کد منقضی شده است.';
            return;
        }

        if ((string)$token->code !== (string)$code) {
            $this->message = 'کد وارد شده اشتباه است.';
            return;
        }

        $this->user->password = Hash::make($this->password);
        $this->user->save();

        $token->delete();

        if (class_exists(Log::class)) {
            Log::MakeLog('update', "بازیابی رمز برای کاربر {$this->user->mobile}", $this->user->id);
        }

        Auth::loginUsingId($this->user->id);
        return to_route('admin');
    }

    public function render()
    {
        return view('livewire.home.users.resetpassword', [
            'user' => $this->user,
            'message' => $this->message
        ])->layout('layouts.auth');
    }
}
