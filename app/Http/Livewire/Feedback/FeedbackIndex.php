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
        'sort' => 'sort',
        'showAll' => 'showAll'
    ];

    public function showAll()
    {
        $this->chosen_category = null;
        $this->feedback = $this->getBaseFeedback()->get();
    }
    public function getBaseFeedback()
    {
        return Feedback::where('removed',false);
    }
    public function sort($details)
    {
        if($this->chosen_category != null) return $this->sortByCategory($details);
        if($this->chosen_category == null) return $this->sortByNullCategory($details);
        $this->getNewFeedback();
    }
    public function sortByNullCategory($details)
    {
        $feedback = $this->getBaseFeedback();
        $this->feedback = $feedback->reorder($details[0],$details[1])->get();
    }
    public function sortByCategory($details)
    {
        $feedback = $this->getBaseFeedback();
        $this->feedback = $feedback->where('category_id',$this->chosen_category)->reorder($details[0],$details[1])->get();
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
    public function getNewFeedback()
    {
        return $this->feedback = Feedback::where('removed',false)->get();
    }
    public function mount()
    {
        $this->feedback = $this->getBaseFeedback()->reorder('votes','desc')->get();
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
