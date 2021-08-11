<x-new-layout>
    
    <div class="flex flex-row container justify-center mx-auto w-full">
        <div class="grid grid-cols-1 grid-rows-8 mt-10">
            <div class="row-start-1 row-span-2 ml-14 align-center">
                <a href="/feedback" ><img class="float-left p-2" src="{{Storage::disk('s3')->url("public/images/shared/icon-arrow-left.svg")}}"> <span class="ml-2">Go back</span></a>
            </div>
            <div class="row-start-3 row-span-4 mt-10 h-full w-11/12 md:w-[600px] mx-auto">
                <livewire:feedback.edit-feedback-form :id="$feedback_id"/>
            </div>
        </div>
    </div>
</x-new-layout>

