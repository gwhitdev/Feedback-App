<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;

class FeedbackCard extends Component
{
    public $feedback;
    public function mount($feedback)
    {
        $this->feedback = $feedback;
    }
    public function render()
    {
        return view('livewire.feedback.feedback-card');
    }
}
