<x-new-layout>
    
    <div class="flex flex-row container justify-center mx-auto w-full">
        <div class="grid grid-cols-1 grid-rows-5 mt-20">
            <div class="row-start-1 row-span-1 align-center">
                <a href="/feedback" ><img class="float-left p-2" src="{{asset('storage/images/shared/icon-arrow-left.svg')}}"> <span class="ml-2">Go back</span></a>
            </div>
            <div class="row-start-2  row-span-4 h-full">
                <livewire:feedback.new-feedback-form />
            </div>
        </div>
    </div>
</x-new-layout>

