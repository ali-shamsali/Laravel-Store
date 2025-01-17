<?php

namespace App\Livewire\Admin\Settings\Footer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Label extends Component
{
    public function render()
    {
        $footer = DB::connection('mysql_settings')->table('footers')->get();
        $footer = $footer[0];
        return view('livewire.admin.settings.footer.label',compact("footer"));
    }
}
