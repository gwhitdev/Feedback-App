
    <div class="col-start-1 col-span-1 p-2">
        <div @class([
            "bg-orange w-[8px] h-[8px] rounded-full" => $colour == 'yellow',
            "bg-feedbackButton w-[8px] h-[8px] rounded-full" => $colour == 'purple',
            "bg-lightBlue w-[8px] h-[8px] rounded-full" => $colour == 'blue'
            ])></div>
    </div>
    <div class="col-start-2 ml-1 col-span-6">
        {{ $status->status }}
    </div>
    <div class="col-start-8 col-span-1">
        {{$status->feedback()->count()}}
    </div>
    
