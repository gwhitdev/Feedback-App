
    <div class="flex w-auto h-[82px] text-white md:mt-3 md:pr-0 md:rounded-xl bg-topBar">
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

<div  x-data="{selected:'planned'}" class="md:divide-x-[20px] md:divide-blue-50 grid grid-cols-1 md:grid-cols-3 md:grid-rows-1 mx-auto justify-center w-screen md:w-full ">
    <div class="grid grid-cols-3 mt-3 w-screen md:hidden">
            <div :class="selected != 'planned' ? 'bg-gray-200 h-full cursor-pointer' : 'bg-lightBlue h-full cursor-pointer'">
                <div :class="selected != 'planned' ? 'text-gray-400 bg-blue-50 mb-[2px] h-6/6' : 'bg-blue-50 h-5/6' " @click=" selected !== 'planned' ? selected = 'planned' : selected = null" class="col-span-1">
                    <p class="p-10 text-center font-bold">Planned</p>
                </div>
            </div>
            <div :class="selected != 'progress' ? 'bg-gray-200 h-full cursor-pointer' : 'bg-purple-500 h-full cursor-pointer'">
                <div :class="selected != 'progress' ? 'text-gray-400 bg-blue-50 mb-[2px] h-6/6' : 'bg-blue-50 h-5/6 ' " @click=" selected !== 'progress' ? selected = 'progress' : selected = null" class="col-span-1">
                    <p class="p-10 text-center font-bold">In Progress</p>
                </div>
                
            </div>
            <div :class="selected != 'live' ? 'bg-gray-200 h-full cursor-pointer' : 'bg-orange h-full cursor-pointer'">
                <div :class="selected != 'live' ? 'text-gray-400 bg-blue-50 mb-[2px] h-6/6' : 'bg-blue-50 h-5/6 ' "  @click=" selected !== 'live' ? selected = 'live' : selected = null" class="col-span-1">
                    <p class="p-10 text-center font-bold">Live</p>
                </div>
            </div>
    </div>
    @foreach($lists as $l)
        <div class="hidden md:grid md:col-span-1">
            <livewire:roadmap.plan-column :list="$l" />
        </div>
        <div class="grid md:hidden">
           
            <div class="row-span-1">
                <livewire:roadmap.plan-column :list='$l' />
            </div>
        </div>
    @endforeach

    
    
</div>
