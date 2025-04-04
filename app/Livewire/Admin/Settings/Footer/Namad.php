<?php

namespace App\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Namad extends Component
{
    public $image_app1, $image_app2, $link_app1, $link_app2, $enamad;

    public function mount()
    {
        $namad = DB::connection('mysql_settings')->table('footers-namad')->first();
        if ($namad) {
            $this->image_app1 = $namad->image_app1;
            $this->image_app2 = $namad->image_app2;
            $this->link_app1  = $namad->link_app1;
            $this->link_app2  = $namad->link_app2;
            $this->enamad     = $namad->enamad;
        }
    }

    public function render()
    {
        return view('livewire.admin.settings.footer.namad');
    }

    public function update()
    {
        $namad = DB::connection('mysql_settings')->table('footers-namad')->first();

        if ($namad) {
            DB::connection('mysql_settings')->table('footers-namad')->where('id', $namad->id)->update([
                "image_app1" => $this->image_app1,
                "image_app2" => $this->image_app2,
                "link_app1"  => $this->link_app1,
                "link_app2"  => $this->link_app2,
                "enamad"     => $this->enamad,
            ]);
        } else {
            DB::connection('mysql_settings')->table('footers-namad')->insert([
                "image_app1" => $this->image_app1,
                "image_app2" => $this->image_app2,
                "link_app1"  => $this->link_app1,
                "link_app2"  => $this->link_app2,
                "enamad"     => $this->enamad,
            ]);
        }

        session()->flash('message', 'تنظیمات با موفقیت ذخیره شد.');
    }
}
