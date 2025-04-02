<?php

namespace App\Livewire\Home\Layouts;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $footer = DB::connection('mysql_settings')->table('footers')->get();
        $footer = $footer[0];
        $topLogoFooter = DB::connection('mysql_settings')->table('footers-logo')
        ->where('isActive',1)
        ->where('type','top')
        ->get();
        $bottomLogoFooter = DB::connection('mysql_settings')->table('footers-logo')
        ->where('isActive',1)
        ->where('type','bottom')
        ->get();
        $menus = DB::connection('mysql_settings')->table('footers-menu')
        ->where('isActive',1)
        ->get();
        return view('livewire.home.layouts.footer',compact('footer' , 'topLogoFooter','bottomLogoFooter' , 'menus'))->layout('layouts.home');
    }
}
