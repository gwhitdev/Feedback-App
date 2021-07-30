<button  x-data="{active: false}" @mousedown="active = true" @click="active = false" wire:click="vote" class="grid p-3 cursor-pointer hover:bg-hoverButton active:text-white active:bg-activeButton bg-gray-100 grid-cols-1 grid-rows-2 w-12 h-16 text-center rounded-xl justify-center mx-auto">

    <div class="mx-auto mt-2">
        <div x-show="active === false"><img  src="{{ asset('storage/images/shared/icon-arrow-up.svg')}}"></div>
        <div x-cloak x-show="active"><img  src="{{ asset('storage/images/shared/icon-arrow-up-white.svg')}}"></div>
    </div>
    

    <div class="text-center "> 
       <b> {{ $votes }}</b>
    </div>
    
</button>