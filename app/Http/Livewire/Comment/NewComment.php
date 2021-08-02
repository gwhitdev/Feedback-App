<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Feedback;
use Exception;

class NewComment extends Component
{
    public $feedback_id;
    public $comment_detail;
    protected $rules = [
        'comment_detail' => 'required|max:255'
    ];

    public function addComment()
    {
        $this->validate();
        $c = new Comment;
        $c->detail = $this->comment_detail;
        $c->feedback_id = $this->feedback_id;
        $c->user_id = auth()->user()->id;
        $f = Feedback::find($this->feedback_id);
        $f->count_comments = $f->count_comments + 1;
        try
        {
            $c->save();
            $f->save();
        }
        catch(Exception $e)
        {
            dump($e->getMessage());
        }
        return redirect("/feedback/$this->feedback_id");
    }
    public function mount($id)
    {
        $this->feedback_id = $id;
    }
    public function render()
    {
        return view('livewire.comment.new-comment');
    }
}
