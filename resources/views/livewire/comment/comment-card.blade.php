<ul x-data="{ showReply: false}"class="mt-5">
    <li class="row-span-1 grid grid-cols-8 grid-rows-8 ">
        <div class="col-start-1 row-start-1 row-span-8 ">
            <img src='{{ asset("storage/{$users_list[$comment['user_id']]['photo']}") }}' class=" w-[40px] h-[40px] justify-center mx-auto rounded-full">
        </div>
        <div  class="col-start-2 row-start-1 col-span-7 row-span-2 ">
            <span class="font-bold">{{ $users_list[$comment['user_id']]['name'] }}</span>
            <span @click="showReply = ! showReply" class="hover:underline float-right text-purpleText font-semibold">Reply</span>
            
        </div>
        
        <div class="col-start-2 row-start-3 col-span-7 row-span-6 ">
            <div class="">
                {{ $comment['detail'] }}
            </div>
            <div class="ml-5 grid grid-cols-8 grid-rows-8">
                @foreach($replies as $reply)
                    <div class="col-span-6 row-span-2">
                        {{ $reply->user_id }} {{ $reply->detail }}
                    </div>
                @endforeach
            </div>
        </div>
        <div x-cloak x-show="showReply" class="mt-5 col-start-2 col-span-7">
            <livewire:reply.new-reply :comment="$comment"/>
        </div>
        

    </li>
</ul>