<?php

namespace App\Http\Livewire\Sidebar;

use Livewire\Component;

class RoadmapRow extends Component
{
    public $status;
    public $colour;
    public $colours = [
        'In-Progress' => 'yellow',
        'Planned' => 'purple',
        'Live' => 'blue'
    ];
    public function mount($status)
    {
        $this->status = $status;
        $this->colour = $this->colours[$status->status];
    }
    public function render()
    {
        return view('livewire.sidebar.roadmap-row');
    }
}
