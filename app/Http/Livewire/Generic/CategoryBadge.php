<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class CategoryBadge extends Component
{
    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.generic.category-badge');
    }
}