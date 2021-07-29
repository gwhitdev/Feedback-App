<div>
    <button class="rounded-xl bg-purple-700 w-[48px] h-[30px] m-3 text-white font-bold" wire:click="$emit('showAll')">All</button>
    @foreach($categories as $c)
        
        <button class="bg-purple-700 pl-2 pr-2 pt-1 pb-1 m-3 rounded-xl text-white font-bold" wire:click="chooseCategory({{$c['id']}})">
            {{$c['name']}}
        </button>
    @endforeach
</div>
