<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class SortButtons extends Component
{
    public $chosen;

    protected $listeners = [
        'changedCategory' => 'changedCategory',
        'showAll' => 'changedCategory',
    ];
    protected $toSortBy = [
        'votes' => [
            'desc' => 'Most Votes',
            'asc' => 'Least Votes'
        ],
        'comments' => [
            'desc' => 'Most Comments',
            'asc' => 'Least Comments'
        ]
    ];

    public function changedCategory()
    {
        $this->sortByVotes('desc');
    }
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
        $this->emit('sort',['count_comments',$direction]);
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
