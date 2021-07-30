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
    public $count;

    protected $listeners = [
        'feedbackCreated' => 'getNewFeedback',
        'setCategory' => 'setCategory',
        'sort' => 'sort',
        'showAll' => 'showAll',
        'voted' => 'showAll'
    ];

    
    public function emitCounted()
    {
        $this->emit('counted',$this->feedback->count());
    }
    public function getBaseFeedback()
    {
        return Feedback::where('removed',false);
    }
    public function showAll()
    {
        $this->chosen_category = null;
        $this->feedback = $this->getBaseFeedback()->reorder('votes','desc')->get();
        $this->emitCounted();
    }
    public function sort($details)
    {
        if($this->chosen_category != null) return $this->sortByCategory($details);
        if($this->chosen_category == null) return $this->sortByNullCategory($details);
        $this->getBaseFeedback()->reorder('votes','desc')->get();
    }
    public function sortByNullCategory($details)
    {
        $this->feedback = $this->getBaseFeedback()->reorder($details[0],$details[1])->get(); 
    }
    public function sortByCategory($details)
    {
        $this->feedback = $this->getBaseFeedback()->where('category_id',$this->chosen_category)->reorder($details[0],$details[1])->get();
    }
    public function setCategory($category_id)
    {
        $this->chosen_category = $category_id; 
        $this->updateFeedbackWithCategory($category_id);
        $this->emitCounted();
    }
    
    public function updateFeedbackWithCategory($cat)
    {
        $this->feedback = Feedback::where('removed',false)->where('category_id',$cat)->reorder('votes','desc')->get();
        $this->emit('changedCategory');
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
        $this->count = $this->feedback->count();
    }
    public function render()
    {
        return view('livewire.feedback.feedback-index');
    }
}
