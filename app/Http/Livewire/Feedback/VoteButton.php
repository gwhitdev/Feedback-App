<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;
use App\Models\Feedback;

class VoteButton extends Component
{
    public $votes;
    public $feedback_id;

    public function getNewVotes()
    {
        $feedback = Feedback::find($this->feedback_id);
        $newVotes = $feedback->votes;
        $this->votes = $newVotes;
    }
    public function vote()
    {
        $feedback = Feedback::find($this->feedback_id);
        $feedback->votes = $feedback->votes + 1;
        $feedback->save();
        $this->getNewVotes();
        $this->emit('voted');
    }
    
    public function mount($feedback)
    {
        $this->feedback_id = $feedback->id;
        $this->votes = $feedback->votes;
    }
    public function render()
    {
        return view('livewire.feedback.vote-button');
    }
}
