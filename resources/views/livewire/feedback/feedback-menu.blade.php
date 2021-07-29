<div class="flex w-auto pl-7 text-white mt-3 h-[82px] rounded-xl bg-topBar">
    <div class="justify-center font-bold hidden mt-7 md:block">
        <img src="{{ asset('/storage/images/desktop/icon-suggestions.svg')}}"class="float-left mr-5">
        {{$count}} {{$count == 1 ? 'Suggestion' : 'Suggestions' }}
    </div>
    <div class="flex flex-grow mt-7 md:ml-10">
    <livewire:generic.sort-buttons />
    </div>
    <div class="flex flex-row-reverse">
        <livewire:feedback.add-feedback-button />
    </div>
</div>