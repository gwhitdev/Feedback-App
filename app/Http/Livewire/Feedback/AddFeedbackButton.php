<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;

class AddFeedbackButton extends Component
{
    public $cross = true;

    public function direct()
    {
        return redirect('/feedback/new');
        

    }
    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.feedback.add-feedback-button');
    }
}
