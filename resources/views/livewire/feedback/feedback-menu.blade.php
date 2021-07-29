<div class="flex w-auto pl-3 pt-5 text-white mt-3 h-[82px] rounded-xl bg-topBar">
    <div class="justify-center font-bold hidden mt-2 md:block">
        <img src="{{ asset('/storage/images/desktop/icon-suggestions.svg')}}"class="float-left mr-5">
        {{$count}} {{$count == 1 ? 'Suggestion' : 'Suggestions' }}
    </div>
    <div class="flex-grow mt-2 md:ml-10">
    <livewire:generic.sort-buttons />
    </div>
</div>