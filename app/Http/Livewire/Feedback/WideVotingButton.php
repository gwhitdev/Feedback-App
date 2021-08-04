<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;
use App\Models\Feedback;

class WideVotingButton extends Component
{
    public $votes;
    public $feedbackId;
    public $feedback;

    public function getFeedback()
    {
        return Feedback::find($this->feedbackId);
    }
    public function getNewVotes()
    {
        //$feedback = Feedback::find($this->feedback_id);
        $feedback = $this->feedback;
        $newVotes = $feedback->votes;
        $this->votes = $newVotes;
    }
    public function vote()
    {
        //$feedback = Feedback::find($this->feedback_id);
        $feedback = $this->feedback;
        $feedback->votes = $feedback->votes + 1;
        $feedback->save();
        $this->getNewVotes();
        $this->emit('voted');
    }
    
    public function mount($feedbackId)
    {
        $this->feedbackId = $feedbackId;
        $this->feedback = $this->getFeedback();
        $this->votes = $this->feedback->votes;
    }
    public function render()
    {
        return view('livewire.feedback.wide-voting-button');
    }
}
