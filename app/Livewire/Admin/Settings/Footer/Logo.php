<?php

namespace App\Livewire\Admin\Settings\Footer;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\admin\settings\footerlogo;
use App\Models\Admin\Log;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Logo extends Component
{
    use WithFileUploads, WithPagination;
    public $title, $type, $isActive, $image;
    public footerlogo $footerlogo;
    public $search = '';
    public $deleteId;
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
        $desc = 'لوگو فوتر توسط کاربر ذخیره شد';
        Log::MakeLog('insert', $desc);

        $this->reset(['title', 'type', 'isActive', 'image']);
    }

    public function deletelogo($id)
    {
        $this->deleteId = $id;
    }

    public function deleteRecord()
    {
        $logo = footerlogo::find($this->deleteId);
        $logo->delete();
        $desc = 'لوگو با موفقیت توسط کاربر حذف شد!';
        Log::MakeLog('delete', $desc);
    }

    public function editlogo($id)
    {
        $logo = footerlogo::find($id);
        if ($logo->isActive == "1") {
            $logo->update([
                'isActive' => "0",
            ]);
        } else {
            $logo->update([
                'isActive' => "1",
            ]);
        }
        session()->flash('message', 'لوگو با موفقیت ویرایش شد!');
        $desc = 'لوگو فوتر توسط کاربر بروزرسانی شد';
        Log::MakeLog('update', $desc);
    }

    public function render()
    {
        if ($this->search != '') {
            $logos = footerlogo::where('title', 'like', '%' . $this->search . '%')->paginate(2);
        } else {
            $logos = footerlogo::paginate(2);
        }
        return view('livewire.admin.settings.footer.logo', compact('logos'));
    }
}
