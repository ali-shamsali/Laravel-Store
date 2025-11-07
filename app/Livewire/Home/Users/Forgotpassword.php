<?php

namespace App\Livewire\Home\Users;
namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\home\Token;
use App\Services\SmsIrService;
use Illuminate\Support\Carbon;
use App\Models\admin\Log;

class Forgotpassword extends Component
{
    public $mobile;
    public $message;

    protected $rules = [
        'mobile' => 'required|ir_mobile',
    ];

    public function sendCode()
    {
        $this->validate();

        $user = User::where('mobile', $this->mobile)->first();

        if (! $user) {
            $this->message = 'کاربری با این شماره یافت نشد.';
            return;
        }

        Token::where('user_id', $user->id)
            ->where('type', 'password_reset')
            ->delete();

        $code = random_int(10000, 99999);

        Token::create([
            'user_id' => $user->id,
            'type' => 'password_reset',
            'code' => $code,
            'exp_at' => Carbon::now()->addMinutes(10), 
        ]);

        (new SmsIrService)->sendVerifyCode($user->mobile, $code);

        if (class_exists(Log::class)) {
            Log::MakeLog('create', "ارسال کد فراموشی رمز ($code) برای {$user->mobile}", $user->id);
        }

        return to_route('password.reset', ['id' => $user->id]);
    }

    public function render()
    {
        return view('livewire.home.users.forgotpassword')->layout('layouts.auth');
    }
}
