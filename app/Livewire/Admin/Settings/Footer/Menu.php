<?php

namespace App\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\admin\settings\footermenu;
use App\Models\Admin\Log;

class Menu extends Component
{
    public $title, $type, $isActive, $image;
    public footermenu $footermenu;
    public $search = '';
    public function mount()
    {
        $this->footermenu = new footermenu();
        $this->title = '';
        $this->type = 'wigetLabel_1';
        $this->isActive = false;
    }

    protected $rules = [
        'title' => 'required',
        'type'  => 'required',
    ];

    public function SaveMenu()
    {
        $this->validate();

        $this->footermenu->title    = $this->title;
        $this->footermenu->type     = $this->type;
        $this->footermenu->isActive = $this->isActive;

        $this->footermenu->save();

        $this->footermenu = new footermenu();

        session()->flash('message', 'منو با موفقیت ذخیره شد!');
        $desc = 'منو فوتر توسط کاربر ذخیره شد';
        Log::MakeLog('insert', $desc);


        $this->reset(['title', 'type', 'isActive']);
    }


    public function render()
    {
        if ($this->search != '') {
            $menus = footermenu::where('title', 'like', '%' . $this->search . '%')->paginate(2);
        } else {
            $menus = footermenu::all();
        }
        return view('livewire.admin.settings.footer.menu', compact('menus'));
    }
}
