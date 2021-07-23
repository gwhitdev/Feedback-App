<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;
use App\Models\Feedback;
use App\Models\Category;

class FeedbackIndex extends Component
{
    public $feedback;
    public $categories;
    public $chosen_category;

    protected $listeners = [
        'feedbackCreated' => 'getNewFeedback',
        'setCategory' => 'setCategory',
        'sort' => 'sort'
    ];

    public function sort($details)
    {
        if($details[0] == 'votes' && $this->chosen_category == !null) return $this->sortByVotes($details[1]);
        if($details[0] == 'comments' && $this->chosen_category != null) return $this->sortByComments($details[1]);
        $this->feedback = Feedback::where('removed',false)->get();
    }
    public function setCategory($category_id)
    {
        $this->chosen_category = $category_id;   
        return $this->updateFeedbackWithCategory($category_id);
    }

    public function updateFeedbackWithCategory($cat)
    {
        $this->feedback = Feedback::where('removed',false)->where('category_id',$cat)->get();
    }

    public function sortByVotes($direction)
    {
        $this->feedback = Feedback::where('removed',false)->where('category_id',$this->chosen_category)->reorder('votes',$direction)->get();
    }
    public function sortByComments($direction)
    {
        $this->feedback = Feedback::where('removed',false)->where('category_id',$this->chosen_category)->reorder('count_comments',$direction)->get();
    }
    public function getNewFeedback()
    {
        return $this->feedback = Feedback::where('removed',false)->get();
    }
    
    public function mount()
    {
        $this->feedback = Feedback::where('removed',false)->get();
        $cats = Category::all();
        $categories = [];
        foreach($cats as $c)
        {
            if($c->feedback()->count() > 0) array_push($categories, $c);
        }
        $this->categories = $categories;
    }
    public function render()
    {
        return view('livewire.feedback.feedback-index');
    }
}
