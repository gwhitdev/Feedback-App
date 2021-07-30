<?php

namespace App\Http\Livewire\Sidebar;

use Livewire\Component;
use App\Models\Status;

class Roadmap extends Component
{
    public $status_list;
    
    public function getStatusList()
    {
        return Status::where('status','!=','Suggestion')->get();
    }
    public function mount()
    {
        $this->status_list = $this->getStatusList();
    }
    public function render()
    {
        return view('livewire.sidebar.roadmap');
    }
}
