<?php

namespace App\Http\Livewire\Roadmap;

use Livewire\Component;
use App\Models\Category;
use App\Models\Feedback;

class PlanCard extends Component
{
    public $item;
    public $color;
    public $title;
    public $category;
    public $feedback;
    public $comments;

    public function mount($item,$color,$title)
    {
        $this->item = $item;
        $this->color = $color;
        $this->title = $title;
        $this->category = Category::where('id',$this->item['category_id'])->first()->name;
        $this->feedback = Feedback::where('id',$this->item['id'])->first();
        $this->comments = $this->feedback->comments()->get();
        //dump($this->item);
    }
    public function render()
    {
        return view('livewire.roadmap.plan-card');
    }
}
