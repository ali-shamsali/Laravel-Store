<?php

namespace App\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\Settings\footermenu;

class Updatemenu extends Component
{
    public $title, $type, $isActive;
    public $footermenu ;
    public $footermenuId;

    public function mount($footermenu)
    {
        $this->footermenuId = $footermenu;
        $this->footermenu = footermenu::find($footermenu);

        if (!$this->footermenu) {
            abort(404);
        }

        $this->title = $this->footermenu->title;
        $this->type = $this->footermenu->type;
        $this->isActive = $this->footermenu->isActive;
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'type' => 'required',
    ];

    public function updateMenu()
    {
        $this->validate();

        $this->footermenu->update([
            'title' => $this->title,
            'type' => $this->type,
            'isActive' => $this->isActive,
        ]);

        session()->flash('message', 'منو با موفقیت بروزرسانی شد!');
    }

    public function render()
    {
        $menu = $this->footermenu ;
        return view('livewire.admin.settings.footer.updatemenu' , compact('menu'));
    }
}
