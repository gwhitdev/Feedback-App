<div class="flex w-auto h-[82px] text-white md:ml-3 md:mr-3 md:mt-3 md:pr-0 md:rounded-xl bg-topBar">
    <div class="justify-center font-bold hidden md:ml-7 mt-7 md:block">
        <img src='{{ Storage::disk('s3')->url('public/images/desktop/icon-suggestions.svg') }}' class="float-left mr-5">
        {{$count}} {{$count == 1 ? 'Suggestion' : 'Suggestions' }}
    </div>
    <div class="flex flex-grow mt-7 ml-5 md:ml-10">
    <livewire:generic.sort-buttons />
    </div>
    <div class="flex flex-row-reverse">
        <livewire:feedback.add-feedback-button />
    </div>
</div>