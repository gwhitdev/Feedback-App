<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class SortButtons extends Component
{
    public function sortByComments($direction)
    {
        $this->emit('sortByComments',$direction);
    }
    public function sortByVotes($direction)
    {
        $this->emit('sortByVotes',$direction);
    }

    public function sort($details)
    {
        $this->emit('sort',$details);
    }
    
    public function render()
    {
        return view('livewire.generic.sort-buttons');
    }
}
