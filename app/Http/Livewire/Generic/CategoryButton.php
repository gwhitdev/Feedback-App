<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class CategoryButton extends Component
{
    public $categories;
    public $clicked;

    public function chooseCategory($category)
    {
        $this->clicked = $category;
        if($category == 'all') $this->emit('showAll');
        if($category != 'all') $this->emit('setCategory',$category);
    }
    public function mount($categories)
    {
        $this->categories = $categories;
        $this->clicked = 'all';
    }
    public function render()
    {
        return view('livewire.generic.category-button');
    }
}
