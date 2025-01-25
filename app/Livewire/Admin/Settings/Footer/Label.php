<?php
namespace App\Livewire\Admin\Settings\Footer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Label extends Component
{

    public $upLabel,$wigetLabel_1,$wigetLabel_2,$wigetLabel_3,$rssLabel,$socialLabel,$supportLabel,$phoneLabel,$addressLabel,$emailLabel,$aboutheadLabel,$aboutbodyLabel,$copyright ;

    public function render()
    {
        $footer = DB::connection('mysql_settings')->table('footers')->first();
        $this->upLabel        = $footer->upLabel ;
        $this->wigetLabel_1   = $footer->wigetLabel_1 ;
        $this->wigetLabel_2   = $footer->wigetLabel_3 ;
        $this->wigetLabel_3   = $footer->wigetLabel_3 ;
        $this->rssLabel       = $footer->rssLabel ;
        $this->socialLabel    = $footer->socialLabel ;
        $this->supportLabel   = $footer->supportLabel ;
        $this->phoneLabel     = $footer->phoneLabel ;
        $this->addressLabel   = $footer->addressLabel ;
        $this->emailLabel     = $footer->emailLabel ;
        $this->aboutheadLabel = $footer->aboutheadLabel ;
        $this->aboutbodyLabel = $footer->aboutbodyLabel ;
        $this->copyright      = $footer->copyright ;
        return view('livewire.admin.settings.footer.label');
    }
    public function update(){
        $footer = DB::connection('mysql_settings')->table('footers')->limit(1);
        $this->validate([
            "upLabel"        => 'required',
            "wigetLabel_1"   => 'required',
            "wigetLabel_2"   => 'required',
            "wigetLabel_3"   => 'required',
            "rssLabel"       => 'required',
            "socialLabel"    => 'required',
            "supportLabel"   => 'required',
            "phoneLabel"     => 'required',
            "addressLabel"   => 'required',
            "emailLabel"     => 'required',
            "aboutheadLabel" => 'required',
            "aboutbodyLabel" => 'required',
            "copyright"      => 'required'
        ]);

        $footer->update([
            "upLabel"        => $this->upLabel,
            "wigetLabel_1"   => $this->wigetLabel_1,
            "wigetLabel_2"   => $this->wigetLabel_2,
            "wigetLabel_3"   => $this->wigetLabel_3,
            "rssLabel"       => $this->rssLabel,
            "socialLabel"    => $this->socialLabel,
            "supportLabel"   => $this->supportLabel,
            "phoneLabel"     => $this->phoneLabel,
            "addressLabel"   => $this->addressLabel,
            "emailLabel"     => $this->emailLabel,
            "aboutheadLabel" => $this->aboutheadLabel,
            "aboutbodyLabel" => $this->aboutbodyLabel,
            "copyright"      => $this->copyright
        ]);

/*         $this->dispatch('show-message', [
            'message' => 'تنظیمات با موفقیت ذخیره شد',
            'status' => 'success'
        ]); */
        //dd($fff);
    }
}
