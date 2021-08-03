<ul x-data="{ showReply: false}"class="mt-5 ">
    <li id="comment" class="row-span-1 grid grid-cols-8 grid-rows-8 ">
        <div class="col-start-1 row-start-1 row-span-8 ">
            <img src='{{ asset("storage/{$users_list[$comment['user_id']]['photo']}") }}' class=" w-[40px] h-[40px] justify-center mx-auto rounded-full">
        </div>
        
        <div  class="col-start-2 row-start-1 col-span-7 row-span-2 ">
            <span class="font-bold">{{ $users_list[$comment['user_id']]['name'] }}</span>
            <span @click="showReply = ! showReply" class="hover:underline float-right text-purpleText font-semibold">Reply</span>
            
        </div>
        
        <div class="col-start-1 row-start-3 col-span-8 row-span-6 divide-x ">
            <div class="ml-[70px]">
                {{ $comment['detail'] }}
            </div>
            <div class="ml-8 pl-[50px] grid grid-cols-8 grid-rows-8 ">
                @if($replies)
                @foreach($replies as $reply)
                    <div class="col-span-1 row-span-2 mt-2">
                        <div class="w-[40px] h-[40px] bg-purple-600 rounded-full"></div>
                    </div>
                    <div class="col-span-7 row-span-2 mt-2">
                        {{ $reply->user_id}}<br>
                        {{ $reply->detail }}
                    </div>
                @endforeach
                @endif
            </div>
        </div>
        <div x-cloak x-show="showReply" class="mt-5 col-start-2 col-span-7">
            <livewire:reply.new-reply :comment="$comment"/>
        </div>
        <div class="col-span-8 row-span-1 mt-10 mb-5">
            <hr>
        </div>        

    </li>
</ul>