<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;
use App\Models\Feedback;

class FeedbackDetail extends Component
{
    public $f;
    public $feedback_id;
    
    public function editFeedback()
    {
        return redirect("/feedback/$this->feedback_id/edit");
    }
    public function getFeedbackRow()
    {
        return Feedback::find($this->feedback_id);
    }
    public function mount($id)
    {
        $this->feedback_id = $id;
        $this->f = $this->getFeedbackRow();
        
    }
    public function render()
    {
        return view('livewire.feedback.feedback-detail');
    }
}
