<div class="grid gap-3 mt-3 grid-cols-4 grid-rows-1 bg-blue-50 h-full">
    <div class="grid gap-3 h-full md:grid-cols-1 md:grid-rows-6 bg-blue-50 col-span-1">
        <div class="row-span-1 bg-white rounded-xl">
        </div>
        <div class="row-span-1 bg-white rounded-xl">
            <livewire:generic.category-button :categories="$categories" />
        </div>
        <div class="row-span-1 bg-white rounded-xl">
        </div>
    </div>
    <div class="grid md:grid-cols-4 md:grid-rows-6 bg-blue-50 col-span-3">
        <div class="row-start-1 col-span-4 bg-blue-50">
            <div class="w-auto mt-3 ml-3 mr-3 h-[82px] rounded-xl bg-purple-500">
                <livewire:generic.sort-buttons />
            </div>
        </div>
        @if($feedback->count() > 0)
        <div class="row-start-2 row-span-5 col-span-4 rounded-xl bg-white">
            <ul>
                @foreach($feedback as $f)
                <li>{{ $f->title }} Votes:{{$f->votes}} Comments:{{$f->count_comments}} Category: {{$f->category->name}}</li>
                @endforeach
            </ul>
        </div>
        @else
        <div class="row-start-2 row-span-5 col-span-4 rounded-xl  bg-no-repeat bg-center bg-white">
            <div class="grid grid-rows-8 h-full">
                <div class="row-start-3 flex justify-center">
                    <img src="{{asset('storage/images/desktop/illustration-empty.svg')}}">
                </div>
                <div class="row-start-5 text-center ">
                    
                    <span class="text-xl font-bold">There is no feedback yet.</span>
                    <p class="mt-3">
                        Got a suggestion? Found a bug that needs to be squashed?<br>
                        We love hearing about new ideas to improve our app.
                    </p>
                </div>
                <div class="row-start-6 text-center">
                    <livewire:feedback.add-feedback-button />
                </div>
            </div>

        </div>
        @endif
    </div>
    
</div>
    