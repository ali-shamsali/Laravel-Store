<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\home\Token;
use App\Services\SmsIrService;
use Illuminate\Support\Carbon;
use App\Models\admin\Log;

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
        $user = User::create([
            'name' => $this->user->name,
            'email' => 'user_' . time() . '@example.com',
            'mobile' => $this->user->mobile,
            'password' => Hash::make($this->password),
        ]);

        $code = random_int(10000, 99999);
        Token::create([
            'user_id' => $user->id,
            'type' => 'register',
            'code' => $code,
            'exp_at' => Carbon::now()->addMinutes(3),
        ]);

        (new SmsIrService)->sendVerifyCode($this->mobile, $code);

        Log::MakeLog('create', "ارسال کد $code برای ثبت‌نام {$this->mobile}", $user->id);

        return to_route('verify.phone', ['id' => $user->id]);
    }


    public function render()
    {
        return view('livewire.home.users.register')->layout('layouts.auth');
    }
}
