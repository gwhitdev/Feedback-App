<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;

class CommentCard extends Component
{
    public $comment;
    public $users_list;
    public $replies;
    public $tempComment;

    public function getReplies()
    {
        $c = $this->tempComment;
        return $c->replies()->get();
    }
    public function checkForReplies()
    {
        $numOfReplies = $this->tempComment->replies()->count();
        return $numOfReplies;
    }
    public function mount($users,$comment)
    {
        $this->tempComment = Comment::where('id',$this->comment['id'])->first();
        $this->users_list = $users;
        $this->comment = $comment;
        if($this->checkForReplies() > 0)
        {
            $this->replies = $this->getReplies();
        }
        //dd($this->replies);
    }
    public function render()
    {
        return view('livewire.comment.comment-card');
    }
}
