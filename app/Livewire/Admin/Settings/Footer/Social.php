<?php

namespace App\Livewire\Admin\Settings\Footer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Social extends Component
{


    public $Text_social_1,$Text_social_2,$Text_social_3,$Text_social_4,$Link_social_1,$Link_social_2,$Link_social_3,$Link_social_4,$Text_phone,$Text_address,$Text_email ;

    public function render()
    {
        $footer = DB::connection('mysql_settings')->table('footers')->first();
        $this->Text_social_1  = $footer->Text_social_1 ;
        $this->Text_social_2  = $footer->Text_social_2 ;
        $this->Text_social_3  = $footer->Text_social_3 ;
        $this->Text_social_4  = $footer->Text_social_4 ;
        $this->Link_social_1  = $footer->Link_social_1 ;
        $this->Link_social_2  = $footer->Link_social_2 ;
        $this->Link_social_3  = $footer->Link_social_3 ;
        $this->Link_social_4  = $footer->Link_social_4 ;
        $this->Text_phone     = $footer->Text_phone ;
        $this->Text_address   = $footer->Text_address ;
        $this->Text_email     = $footer->Text_email ;

        return view('livewire.admin.settings.footer.social');
    }
    public function update(){
        $footer = DB::connection('mysql_settings')->table('footers')->limit(1);

        $footer->update([
            "Text_social_1" => $this->Text_social_1 ,
            "Text_social_2" => $this->Text_social_2 ,
            "Text_social_3" => $this->Text_social_3 ,
            "Text_social_4" => $this->Text_social_4 ,
            "Link_social_1" => $this->Link_social_1 ,
            "Link_social_2" => $this->Link_social_2 ,
            "Link_social_3" => $this->Link_social_3 ,
            "Link_social_4" => $this->Link_social_4 ,
            "Text_phone"    => $this->Text_phone,
            "Text_address"  => $this->Text_address ,
            "Text_email"    => $this->Text_email,
        ]);
    }
}
