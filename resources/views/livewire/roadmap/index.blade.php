<div class="grid grid-cols-3 grid-rows-1">
    <div class="col-start-1">
        <div>
            Planned
        </div>
        @foreach($planned_feedback_list as $p)
            <div class="bg-white w-[250px]">
                {{ $p->title }}
            </div>
        @endforeach
    </div>
    <div class="col-start-2">
        <div>
            In-Progress
        </div>
        @foreach($progress_feedback_list as $p)
            <div class="bg-white w-[250px]">
                {{ $p->title }}
            </div>
        @endforeach
    </div>
    <div class="col-start-3">
        <div>
            Live
        </div>
        @foreach($live_feedback_list as $l)
            <div class="bg-white w-[250px]">
                {{ $l->title }}
            </div>
        @endforeach
    </div>
    
</div>
