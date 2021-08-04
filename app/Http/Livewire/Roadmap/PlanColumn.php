<?php

namespace App\Http\Livewire\Roadmap;

use Livewire\Component;

class PlanColumn extends Component
{
    public $list;

    public function mount($list)
    {
        $this->list = $list;
        //dump($this->list);
    }
    public function render()
    {
        return view('livewire.roadmap.plan-column');
    }
}
