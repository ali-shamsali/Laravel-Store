<?php

namespace App\Livewire\Home\Users;

use App\Models\admin\log;
use App\Models\home\Token;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\SmsIrService;

class Login extends Component
{
    public user $user;
    public $mobile, $password;
    public function mount()
    {
        $this->user = new User();
    }

    protected $rules = [
        'mobile' => 'required|ir_mobile',
        'password' => 'required|min:3',
    ];

    public function Loginform()
    {
        $this->validate();
        $this->user->mobile     = $this->mobile;
        $this->user->password   = $this->password;
        $user = User::where('mobile', $this->mobile)->first();

        if (isset($user)) {
            if (is_null($user->mobile_verified_at)) {
                $code = random_int(10000, 99999);
                Token::create([
                    'user_id' => $user->id,
                    'type' => 'register',
                    'code' => $code,
                    'exp_at' => Carbon::now()->addMinutes(3)
                ]);
                (new SmsIrService)->sendVerifyCode($this->mobile, $code);

                $desc = "کد ورود ارسال شد ($code) به شماره {$this->mobile}";
                Log::MakeLog('create', $desc, $user->id);

                return to_route('verify.phone', ['id' => $user->id]);
            }


            if (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                return to_route('admin');
            } else {
                dd('password wrong!!');
            }
        } else {
            dd('user not found');
        }
    }

    public function render()
    {
        return view('livewire.home.users.login')->layout('layouts.auth');
    }
}
