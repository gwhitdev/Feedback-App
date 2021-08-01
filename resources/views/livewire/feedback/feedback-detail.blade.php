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
            <ul class="mt-5">
                <li class="row-span-1 grid grid-cols-8 grid-rows-8 ">
                    <div class="col-start-1 row-start-1 row-span-8 ">
                        <img src='{{ asset("storage/{$users_list[$comment['user_id']]['photo']}") }}' class=" w-[40px] h-[40px] justify-center mx-auto rounded-full">
                    </div>
                    <div class="col-start-2 row-start-1 col-span-7 row-span-2 ">
                        <span class="font-bold">{{ $users_list[$comment['user_id']]['name'] }}</span>
                        <span class="float-right">Reply</span>
                    </div>
                    <div class="col-start-2 row-start-3 col-span-7 row-span-6 ">
                        <div class="">
                            {{ $comment['detail'] }}
                        </div>
                    </div>
                </li>
            </ul>
            @endforeach
            
        </div>
    </div> 
@endif
    <div class="row-start-6 row-span-2 p-3 w-full ">
        <div class="bg-white rounded-xl p-5 grid grid-rows-4">
            <div class="row-start-1 row-span-1">
                <h1 class="text-lg font-bold">Add a comment</h1>
            </div>
            <form wire:submit.prevent='addComment' class="row-start-2 row-span-3 grid grid-rows-8">
                <div x-data="{chars:false}" class="row-start-1 row-span-1">
                    <textarea x-ref="detail" @keydown="$refs.detail.value.length >= 255 ? chars = true : chars = false" @keyup="$refs.charsleft.innerText=255-$refs.detail.value.length" id="detail" wire:model.defer="comment_detail"rows="5"class="w-full border-0 rounded-lg bg-gray-100"></textarea>
                    <template x-if="chars">
                        <span class="text-red-500">Too many characters!</span>
                    </template>
                        <span x-ref="charsleft">255</span> characters left
                    
                    
                    @error('comment_detail')<span class="text-red-500">Too many characters</span>@enderror
                </div>
                <div class="row-start-2 row-span-1">
                    <button class="float-right pt-3 pb-3 pl-4 pr-4 rounded-xl font-bold text-white bg-feedbackButton">
                        Post comment
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
