<?php

namespace App\Livewire\Admin\Layouts;

use Livewire\Component;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
Verta::setFormat('Y/n/j');

class Header extends Component
{
    public function render()
    {
        //$user = auth()->user();
        $user = auth::user();
        return view('livewire.admin.layouts.header',compact('user'));
    }
}
