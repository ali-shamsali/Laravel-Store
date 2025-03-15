<?php

namespace App\Livewire\Admin\Settings\Footer;
use Livewire\Component;
use App\Models\admin\settings\footerlogo;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Trashlogo extends Component
{
    use WithFileUploads, WithPagination;
    public $title, $type, $isActive, $image;
    public footerlogo $footerlogo;
    public $search = '';
    public $deleteId;

    public function IDlogo($id){
        $this->deleteId = $id;
    }

    public function restoreLogo()
    {
        $logo = FooterLogo::onlyTrashed()->find($this->deleteId);
        if ($logo) {
            $logo->restore();
            session()->flash('message', 'لوگو با موفقیت بازیابی شد!');
        }
    }
    public function forceDeleteLogo()
    {
        $logo = FooterLogo::onlyTrashed()->find($this->deleteId);
        if ($logo) {

            if ($logo->image) {
                Storage::disk('public')->delete($logo->image);
            }

            $logo->forceDelete();
            session()->flash('message', 'لوگو و فایل آن برای همیشه حذف شدند!');
        }
    }


    public function render()
    {
        $logos = FooterLogo::onlyTrashed()
            ->where('title', 'like', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.admin.settings.footer.trashlogo', compact('logos'));
    }
}
