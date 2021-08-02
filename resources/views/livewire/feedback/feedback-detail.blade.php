<div class="grid grid-rows-9 w-[600px]">
    <div class="row-start-1 row-span-2 mt-3 h-full">
        <livewire:feedback.feedback-card :feedback="$f"/>
    </div>
@if($comments)
    <div class="bg-white rounded-xl row-start-3 row-span-3 p-5 mx-3 h-full grid grid-rows-2">
        <div class="row-span-2 mr-2">
           <span class="font-bold">{{ $count }} {{ $count == 1 ? 'Comment' : 'Comments'}}</span>
        </div>
        <div class="row-span-1  grid grid-rows-8">
            
            @foreach($comments as $comment)
                <livewire:comment.comment-card :users="$users_list" :comment="$comment" />
            @endforeach
            
        </div>
    </div> 
@endif
    <div class="row-start-6 row-span-2 p-3 w-full ">
        <livewire:comment.new-comment :id="$feedback_id"/>
    </div>

</div>
