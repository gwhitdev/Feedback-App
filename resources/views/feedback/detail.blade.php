<x-new-layout>
    <div class="flex flex-row container justify-center mx-auto w-full">
        <div class="grid grid-cols-1 grid-rows-8 mt-10">
            <div class="row-start-1 row-span-2 flex items-center">
                <a class="flex-grow" href="/feedback" ><img class="float-left p-2" src="{{asset('storage/images/shared/icon-arrow-left.svg')}}"> <span class="ml-2">Go back</span></a>
                    <a href="/feedback/{{$feedback_id}}/edit" class="float-right justify-center pt-3 pb-3 pl-5 pr-5 hover:bg-hoverButton bg-activeButton  ml-0 mb-3 mr-7 md:m-3 text-white font-bold rounded-xl">
                        Edit Feedback
                    </a>

            </div>
            <div class="row-start-3 row-span-4 mt-10 h-full">
                <livewire:feedback.feedback-detail :id="$feedback_id"/>
            </div>
        </div>
    </div>
</x-new-layout>

