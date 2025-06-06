<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\admin\log as LogModel;
use Livewire\WithPagination;

class Log extends Component
{

    public LogModel $LogModel;
    public $search = '';

    public function mount()
    {
        $this->LogModel = new LogModel;
    }

    public function render()
    {
        if ($this->search != '') {
            $logs = LogModel::where('title', 'like', '%' . $this->search . '%')->paginate(2);
        } else {
            $logs = LogModel::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('livewire.admin.settings.log', compact('logs'));
    }
}
