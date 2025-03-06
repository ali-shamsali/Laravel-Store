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

        $this->footerlogo = new footerlogo();

        session()->flash('message', 'لوگو با موفقیت ذخیره شد!');

        $this->reset(['title', 'type', 'isActive' , 'image']);
    }

    public function deletelogo($id){
        $logo = footerlogo::find($id);
        $logo->delete();
        session()->flash('message', 'لوگو با موفقیت حذف شد!');
    }

    public function editlogo($id){
        $logo = footerlogo::find($id);
        if($logo->isActive == "1"){
            $logo->update([
                'isActive' => "0",
            ]);
        }else{
            $logo->update([
                'isActive' => "1",
            ]);
        }
        session()->flash('message', 'لوگو با موفقیت ویرایش شد!');
    }

    public function render()
    {
        $logos = footerlogo::all();
        return view('livewire.admin.settings.footer.logo', compact('logos'));
    }
}
