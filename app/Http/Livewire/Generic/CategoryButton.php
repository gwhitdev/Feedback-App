<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class CategoryButton extends Component
{
    public $categories;

    public function chooseCategory($category)
    {
        $this->emit('setCategory',$category);
    }
    public function mount($categories)
    {
        $this->categories = $categories;
    }
    public function render()
    {
        return view('livewire.generic.category-button');
    }
}
