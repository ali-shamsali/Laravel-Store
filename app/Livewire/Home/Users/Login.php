<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                return to_route('verify.phone',  ['id' => $user->id]);
            }


            if (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                to_route('admin');
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
