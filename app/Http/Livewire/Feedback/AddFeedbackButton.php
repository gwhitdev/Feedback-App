<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;

class AddFeedbackButton extends Component
{
    public function direct()
    {
        return redirect('/feedback/new');
    }
    public function render()
    {
        return view('livewire.feedback.add-feedback-button');
    }
}
