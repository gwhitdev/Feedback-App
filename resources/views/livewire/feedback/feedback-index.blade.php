<div class="grid gap-3 w-screen md:w-[689px] lg:w-full mt-3 grid-cols-1 grid-rows-4 md:grid-rows-4 md:grid-cols-1 lg:grid-cols-4 lg:grid-rows-1 bg-blue-50 h-full">
    <div class="flex md:gap-[10px] lg:mt-3 lg:gap-5 md:flex-row lg:flex-col justify-start mx-auto bg-blue-50 col-span-1">
        <div class="flex bg-headerImage bg-cover h-[72px] w-[375px] md:w-[223px] md:h-[178px] lg:w-[255px] lg:h-[137px] rounded-xl">
            Frontend Mentor
        </div>
        <div class="bg-white md:w-[223px] md:h-[178px] lg:w-[255px] lg:h-[166px] rounded-xl">
            <livewire:generic.category-button :categories="$categories" />
        </div>
        <div class="bg-white rounded-xl md:h-[178px] md:w-[223px] lg:w-[255px] lg:h-[178px]">
        </div>
    </div>
    <div class="grid md:grid-cols-4 md:grid-rows-6 bg-blue-50 col-span-3">
        <div class="row-start-1 col-span-4">
            <livewire:feedback.feedback-menu :count="$count"/>
        </div>
        <div class="rounded-xl row-start-2 row-span-4 col-span-4 grid bg-white lg:grid-rows-8 grid-cols-1 lg:h-full w-full">
            @if($feedback->count() > 0)
                <div class="row-span-12 rounded-xl h-full bg-white">
                    <ul>
                        @foreach($feedback as $f)
                            <li>{{ $f->title }} Votes:{{$f->votes}} Comments:{{$f->count_comments}} Category: {{$f->category->name}}</li>
                        @endforeach
                    </ul>
                    
                </div>
            @else
                
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
                    <div class="row-start-5 text-center">
                        <livewire:feedback.add-feedback-button />
                    </div>
                
                @endif
            </div>
            
        </div>

        
        
    </div>
    
</div>
    