<?php

namespace App\Http\Livewire\Feedback;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Category;
use Exception;

class NewFeedbackForm extends Component
{
    public $detail;
    public $user_id;
    public $status_id = 1;
    public $category_id;
    public $title;
    public $categories;

    protected $rules = [
        'title'=>'required',
        'detail'=>'required',
        'category_id'=>'required',
        'status_id'=>'required',
        'user_id'=>'required',
    ];

    public function create()
    {
        $f = new Feedback;
        $f->title = $this->title;
        $f->detail = $this->detail;
        $f->status_id = $this->status_id;
        $f->category_id = $this->category_id;
        $f->user_id = auth()->user()->id;
        try
        {
            $f->save();
        }
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
        
        return redirect('/feedback');
    }
    
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.feedback.new-feedback-form');
    }
}
