<?php

namespace App\Http\Livewire\Feedback;

//use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use App\Models\Feedback;
use App\Models\User;
use Exception;
class FeedbackDetail extends Component
{
    public $f;
    public $feedback_id;
    public $comments;
    public $comment_detail;
    public $count;
    public $user;
    public $users_list;
    
    
    public function getCommentsCount()
    {
        return $this->f->comments()->count();
    }
    public function getComments()
    {
        $c = $this->f->comments()->get();
        return $c->toArray();
    }
    public function editFeedback()
    {
        return redirect("/feedback/$this->feedback_id/edit");
    }
    public function getFeedbackRow()
    {
        return Feedback::find($this->feedback_id);
    }
    public function getUser()
    {
        return $this->user = User::find($this->comment->user_id);
    }
    public function getUserDetailsForComments()
    {
        $user_details = array();
        foreach($this->comments as $comment)
        {
            $user = User::find($comment['user_id']);
            $name = $user->name;
            $alias = $user->alias()->first()->alias;
            $profilePic = $user->profile_photo_path;

            $user_details[$comment['user_id']] = [
                'name' => $name,
                'photo' => $profilePic,
                'alias' => '@' . $alias
            ];
        }
        $this->users_list = $user_details;
    }
    
    
    public function mount($id)
    {
        $this->feedback_id = $id;
        $this->f = $this->getFeedbackRow();
        $this->comments = $this->getComments();
        $this->count = $this->getCommentsCount();
        $this->getUserDetailsForComments();
    }
    public function render()
    {
        return view('livewire.feedback.feedback-detail');
    }
}
