<?php

namespace App\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\admin\settings\footerlogo;
use Livewire\WithFileUploads ;

class Logo extends Component
{
    use WithFileUploads;
    public $title, $type, $isActive , $image;
    public footerlogo $footerlogo;

    public function mount()
    {
        $this->footerlogo = new footerlogo();
        $this->title = '';
        $this->type = 'bottom';
        $this->isActive = false;
    }

    protected $rules = [
        'title' => 'required',
        'type'  => 'required',
    ];

    public function SaveLogo()
    {
        $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('footer-logos', 'public');
            $this->footerlogo->image = $imagePath;
        }

        $this->footerlogo->title    = $this->title;
        $this->footerlogo->type     = $this->type;
        $this->footerlogo->isActive = $this->isActive;

        $this->footerlogo->save();

        session()->flash('message', 'لوگو با موفقیت ذخیره شد!');

        $this->reset(['title', 'type', 'isActive' , 'image']);
    }

    public function render()
    {
        return view('livewire.admin.settings.footer.logo');
    }
}
