<?php

namespace App\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\Settings\FooterLogo;
use Livewire\WithFileUploads;

class Updatelogo extends Component
{
    use WithFileUploads;

    public $footerlogoId;
    public $title, $type, $isActive, $image;
    public $footerlogo;

    public function mount($footerlogo)
    {
        $this->footerlogoId = $footerlogo;
        $this->footerlogo = FooterLogo::find($footerlogo);

        if (!$this->footerlogo) {
            abort(404);
        }

        $this->title = $this->footerlogo->title;
        $this->type = $this->footerlogo->type;
        $this->isActive = $this->footerlogo->isActive;
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'type' => 'required|in:bottom,top',
        'image' => 'nullable|image|max:2048',
    ];

    public function updateLogo()
    {
        $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('footer-logos', 'public');
            $this->footerlogo->image = $imagePath;
        }

        $this->footerlogo->update([
            'title' => $this->title,
            'type' => $this->type,
            'isActive' => $this->isActive,
        ]);

        session()->flash('message', 'لوگو با موفقیت بروزرسانی شد!');
    }

    public function render()
    {
        $logo = $this->footerlogo ;
        return view('livewire.admin.settings.footer.updatelogo' , compact('logo'));
    }
}
