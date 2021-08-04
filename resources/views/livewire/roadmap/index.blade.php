
    <div class="flex w-auto h-[82px] text-white md:ml-3 md:mr-3 md:mt-3 md:pr-0 md:rounded-xl bg-topBar">
        <div class="flex flex-grow mt-3 ml-5 md:ml-10">
            <div class="grid grid-cols-1 grid-rows-2 mt-2">
                <div class="col-start-1 row-start-1">
                    <div class="row-start-1 row-span-2 align-center">
                        <a href="/feedback" ><img class="float-left p-2" src="{{asset('storage/images/shared/icon-arrow-left.svg')}}"> <span class="ml-2">Go back</span></a>
                    </div>
                </div>
                <div class="col-start-1 row-start-2 ml-2 mt-[-10px]">
                    <span class="font-bold text-lg">Roadmap</span>
                </div>
            </div>
        </div>
        <div class="flex flex-row-reverse">
            <livewire:feedback.add-feedback-button />
        </div>
    </div>

<div class="md:mx-3 md:divide-x-[20px] md:divide-blue-50 grid grid-cols-1 md:grid-cols-3 md:grid-rows-1 mx-auto justify-center w-auto ">
    @foreach($lists as $l)
        <div class="col-span-1">
            <livewire:roadmap.plan-column :list="$l" />
        </div>
    @endforeach

    
    
</div>
