<?php

namespace App\Http\Livewire\Roadmap;

use Livewire\Component;
use App\Models\Status;
use App\Models\Category;
use App\Models\Feedback;

class Index extends Component
{
    public $status_list;
    public $planned_id;
    public $live_id;
    public $progress_id;
    public $planned_feedback_list;
    public $live_feedback_list;
    public $progress_feedback_list;
    public $lists;
    public function mount()
    {
        $this->planned_id = Status::where('status','Planned')->first()->id;
        $this->live_id = Status::where('status','Live')->first()->id;
        $this->progress_id = Status::where('status','In-Progress')->first()->id;
        
        $this->planned_feedback_list = Feedback::where('status_id',$this->planned_id)->get();
        $this->live_feedback_list = Feedback::where('status_id',$this->live_id)->get();
        $this->progress_feedback_list = Feedback::where('status_id',$this->progress_id)->get();
        $this->lists = [
            'planned' => [ 
                'data' => $this->planned_feedback_list,
                'title' => 'Planned',
                'subtitle' => 'Ideas prioritised for research',
                'color' => 'orange'
            ],
            'progress' => [
                'data' => $this->progress_feedback_list,
                'title' => 'In-Progress',
                'subtitle' => 'Currently being developed',
                'color' => 'feedbackButton'
            ],
            'live' => [
                'data' => $this->live_feedback_list,
                'title' => 'Live',
                'subtitle' => 'Released features',
                'color' => 'lightBlue'
            ],
        ];
    }
    public function render()
    {
        return view('livewire.roadmap.index');
    }
}
