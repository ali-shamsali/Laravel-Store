<?php

namespace App\Livewire\Admin\Roles;

use App\Models\admin\permissions\role;
use Livewire\Component;
use App\Models\Admin\Log;
use App\Models\admin\permissions\permission;

class Index extends Component
{
    public $title, $type, $isActive, $image;
    public role $role;
    public $search = '';
    public $deleteId;

    public function mount()
    {
        $this->role = new role();

    }

    protected $rules = [
        'title' => 'required',
        'desc'  => 'required',
        'permissions' => 'nullable',
    ];

    public function roleForm()
    {
        $this->validate();

        $this->role->title       = $this->title;
        $this->role->desc        = $this->desc;
        $this->role->permissions = $this->permissions;

        $this->role->permissions()->sync();
        $this->role->save();

        $this->role = new role();

        session()->flash('message', 'نقش با موفقیت ذخیره شد!');
        $desc = 'نقش توسط کاربر ذخیره شد';
        Log::MakeLog('insert', $desc);


        $this->reset(['title', 'type', 'isActive']);
    }

    public function deleteRole($id)
    {
        $this->deleteId = $id;
    }

    public function deleteRecord()
    {
        $logo = role::find($this->deleteId);
        $logo->delete();
        $desc = 'نقش با موفقیت توسط کاربر حذف شد!';
        Log::MakeLog('delete', $desc);
    }


    public function render()
    {
        if ($this->search != '') {
            $roles = role::where('title', 'like', '%' . $this->search . '%')->paginate(2);
            $permissions = permission::all() ;
        } else {
            $roles = role::all();
            $permissions = permission::all() ;
        }
        return view('livewire.admin.roles.index', compact('roles','permissions'));
    }
}
