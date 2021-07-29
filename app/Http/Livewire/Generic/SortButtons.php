<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class SortButtons extends Component
{
    public $chosen;

    protected $toSortBy = [
        'votes' => [
            'asc' => 'Most Votes',
            'desc' => 'Least Votes'
        ],
        'comments' => [
            'asc' => 'Most Comments',
            'desc' => 'Least Comments'
        ]
    ];

    public function changeSortDisplayDropdown($option,$direction)
    {
        $this->chosen = $this->toSortBy[$option][$direction];
    }
    public function sortByVotes($direction)
    {
        $this->changeSortDisplayDropdown('votes',$direction);
        $this->emit('sort',['votes',$direction]);
    }
    public function sortByComments($direction)
    {
        $this->changeSortDisplayDropdown('comments',$direction);
        $this->emit('sort',['comments',$direction]);
    }
    public function mount()
    {
        $this->chosen = 'Most Votes';
    }
    
    public function render()
    {
        return view('livewire.generic.sort-buttons');
    }
}
