<?php

namespace App\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\admin\log as LogModel;
use Hekmatinasser\Verta\Verta;
class Index extends Component
{
    public LogModel $LogModel;
    public $search = '';

    public function mount()
    {
        $this->LogModel = new LogModel;
    }

    public function render()
    {

        $logs = LogModel::latest()->take(5)->get();

        return view('livewire.admin.home.index', compact('logs'));
    }
}
