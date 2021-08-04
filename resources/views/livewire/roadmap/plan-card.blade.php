<div @class(["bg-{$color} rounded-lg"])>
    <div class="bg-white p-5 mt-2 grid grid-rows-1">
        <div class="row-start-1">
            <div class="flex items-center">
                <div @class(["w-[8px] h-[8px] bg-{$color} rounded-full mr-3 float-left"])></div> 
                <div class="float-left">{{ $title }}</div>
            </div>
        
            <div class="row-start-2 mt-3">
                <p class="font-bold">
                    {{ $item['title']}}
                </p>
                <p>
                    {{ $item['detail']}}
                </p>
                <p>
                    <livewire:generic.category-badge :category="$category" />
                </p>
                <div class="mt-5">
                    <div class="float-left">
                        <livewire:feedback.wide-voting-button :feedbackId="$item['id']" />
                    </div>
                    <div class="float-right mt-[-15px]">
                        <livewire:generic.comments-counter :comments="$comments" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
