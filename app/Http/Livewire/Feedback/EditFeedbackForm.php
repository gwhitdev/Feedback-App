<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;
use App\Models\Feedback;
use App\Models\Category;
use App\Models\Status;
use Exception;

class EditFeedbackForm extends Component
{
    public $categories;
    public $status_list;
    public $status_id;
    public $category_id;
    public $detail;
    public $title;
    public $feedback;
    protected $rules = [
        'title'=>'required',
        'detail'=>'required',
        'category_id'=>'required',
        'status_id'=>'required',
    ];
    

    public function getFeedbackRow($id)
    {
        return Feedback::find($id);
    }
    public function getCategories()
    {
        return Category::all();
    }
    public function getStatusList()
    {
        return Status::all();
    }
    public function save()
    {
        $this->validate();
        $f = Feedback::find($this->feedback->id);
        $f->title = $this->title;
        $f->detail = $this->detail;
        $f->category_id = $this->category_id;
        $f->status_id = $this->status_id;
        try
        {
            $f->save();
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
        
        return redirect('/feedback');
    }
    public function delete()
    {
        $f = Feedback::find($this->feedback->id);
        $f->removed = true;
        $f->save();
        return redirect('/feedback');
    }
    public function mount($id)
    {
        $this->status_list = $this->getStatusList();
        $this->categories = $this->getCategories();
        $this->feedback = $this->getFeedbackRow($id);
        $this->status_id = $this->feedback->status_id;
        $this->category_id = $this->feedback->category_id;
        $this->title = $this->feedback->title;
        $this->detail = $this->feedback->detail;
    }
    public function render()
    {
        return view('livewire.feedback.edit-feedback-form');
    }
}
