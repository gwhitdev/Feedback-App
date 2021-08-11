<div class="grid md:gap-3 mx-auto w-screen h-full md:w-[689px] md:mt-3 grid-cols-1 grid-rows-8 md:grid-rows-4 md:grid-cols-1 lg:w-full lg:grid-cols-4 lg:grid-rows-1 bg-blue-50 ">
    <div class="flex justify-start mx-auto bg-blue-50 col-span-1 h-[72px] md:h-auto md:gap-[10px] md:flex-row lg:flex-col lg:mt-3 lg:gap-5">
        <div class="flex p-3 bg-headerImage bg-cover w-screen md:flex-col-reverse md:rounded-xl md:w-[223px] md:h-[178px] lg:w-[255px] lg:h-[137px] ">
            <div class="text-white w-full mb-3 md:mb-0">
                <span class="font-bold text-xl">Frontend Mentor</span><br>
                <span>Feedback Board</span>
            </div>
            <div class="float-right mt-3 mr-5 md:hidden">
                <x-menu>
                    <x-slot name="trigger">
                        <button>
                            <img src='{{ Storage::disk('s3')->url('public/images/shared/mobile/icon-hamburger.svg') }}'>
                        </button>
                    </x-slot>
                    <x-slot name="close">
                        <button>
                            <img src='{{ Storage::disk('s3')->url('public/images/shared/mobile/icon-close.svg') }}'>
                        </button>
                    </x-slot>
                    <div class="absolute text-left right-0 z-50 w-1/2 h-full bg-gray-100 top-[72px]">
                        <div class="grid grid-cols-1 grid-rows-3 gap-5 p-3 row-span-1">
                            <div class="bg-white rounded-xl justify-center">
                                <livewire:generic.category-button :categories="$categories" />
                            </div>
                            <div class="bg-white rounded-xl justify-center text-mainText pb-5">
                                <livewire:sidebar.roadmap />
                            </div>
                        </div>
                    </div>
                </x-menu>
            </div>
        </div>
        <div class="bg-white  hidden md:block md:w-[223px] md:h-[178px] lg:w-[255px] lg:h-[166px] md:rounded-xl">
            <livewire:generic.category-button :categories="$categories" />
        </div>
        <div class="bg-white hidden md:block rounded-xl md:h-[178px] md:w-[223px] lg:w-[255px] lg:h-[178px]">
            <livewire:sidebar.roadmap />
        </div>
    </div>
    <div class="grid md:grid-cols-4 md:grid-rows-6 bg-blue-50 col-span-3">
        <div class="row-start-1 col-span-4">
            <livewire:feedback.feedback-menu :count="$count"/>
        </div>
        <div class="rounded-xl row-start-2 row-span-4 col-span-4 grid  lg:grid-rows-8 grid-cols-1 lg:h-full w-full">
            @if($feedback->count() > 0)
                <div class="row-span-12 rounded-xl h-screen md:mt-20 lg:mt-[-10px]">
                        @foreach($feedback as $f)
                            <livewire:feedback.feedback-card :key="$f->id" :feedback=$f />
                        @endforeach    
                </div>
            @else
                <div class="bg-white md:mt-20 md:rounded-xl md:p-5 md:pt-10 lg:mt-0">
                    <div class="row-start-3  h-[136px] flex justify-center ">
                        <img  src="{{asset('storage/images/desktop/illustration-empty.svg')}}">
                    </div>
                    <div class="row-start-4  text-center ">
                        
                        <span class="text-xl font-bold">There is no feedback yet.</span>
                        <p class="mt-3">
                            Got a suggestion? Found a bug that needs to be squashed?<br>
                            We love hearing about new ideas to improve our app.
                        </p>
                    </div>
                    <div class="row-start-5 text-center ">
                        <livewire:feedback.add-feedback-button />
                    </div>
                </div>
                @endif
            </div>
            
        </div>

        
        
    </div>
    
</div>
    