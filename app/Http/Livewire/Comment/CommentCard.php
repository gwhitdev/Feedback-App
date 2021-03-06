<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Alias;

class CommentCard extends Component
{
    public $comment;
    public $users_list;
    public $replies;
    public $tempComment;
    public $repliesUsersList;
    //public $alias;

    public function getRepliesUsersList()
    {
        $users = array();
        //dd($this->replies);
        foreach($this->replies as $reply)
        {
            $user = User::find($reply['user_id']);
            $name = $user->name;
            $profilePic = $user->profile_photo_path;
            $alias = $user->alias()->first()->alias;
            
            $users[$reply['user_id']] = [
                'name' => $name,
                'photo' => $profilePic,
                'alias' => '@' . $alias
            ];
        }
        //dd($users);
        return $this->repliesUsersList = $users;
    }
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
            $this->repliesUserList = $this->getRepliesUsersList();
        }
        //dd($this->repliesUsersList);
    }
    public function render()
    {
        return view('livewire.comment.comment-card');
    }
}
