<?php

namespace App\Http\Livewire\Reply;

use Livewire\Component;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\SecondaryReply;
use Exception;

class NewReply extends Component
{
    public $comment;
    public $user;
    public $reply_detail;
    public $fId;
    protected $rules = [
        'reply_detail' => 'required|max:255'
    ];
    public $replyType;
    public function incrementFeedbackCommentsCount()
    {
        $f = Feedback::find($this->fId);
        $f->count_comments = $f->count_comments + 1;
        $f->save();
    }
    
    public function checkReplyType($replyType)
    {
        if($replyType == 'reply')
        {
            $this->addReply();
        }
        if($replyType == 'secondaryReply')
        {
            $this->addSecondaryReply();
        }
    }
    public function addSecondaryReply()
    {
        $this->validate();
        $r = new SecondaryReply;
        $r->user_id = $this->user();
        $r->reply_id = $this->comment['id'];
        $r->detail = $this->detail;
        try
        {
            $r->save();
            return redirect("/feedback{$this->fId}");
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
        
    }
    public function addReply()
    {   
        $this->validate();
        $r = new Reply;
        $r->user_id = $this->user;
        $r->comment_id = $this->comment['id'];
        $r->feedback_id = $this->fId;
        $r->detail = $this->reply_detail;
        try
        {
            $r->save();
            $this->incrementFeedbackCommentsCount();
            return redirect("/feedback/{$this->fId}");
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
    }
    public function mount($comment,$replyType)
    {
        $this->replyType = $replyType;
        $this->user = auth()->user()->id;
        $this->comment = $comment;
        $this->fId = $this->comment['feedback_id'];
    }
    public function render()
    {
        
        return view('livewire.reply.new-reply');
    }
}
