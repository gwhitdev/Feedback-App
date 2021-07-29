<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;

class FeedbackMenu extends Component
{
    public $count;

    protected $listeners = [
        'counted' => 'counted'
    ];

    public function counted($new_count)
    {
        $this->count = $new_count;
    }
    public function mount($count)
    {
        $this->count = $count;
    }
    public function render()
    {
        return view('livewire.feedback.feedback-menu');
    }
}
