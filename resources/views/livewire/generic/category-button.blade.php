<div x-data="{ activeButton: ''}" class="p-3">
    @if($clicked == 'all')
        <button wire:click="chooseCategory('all')" wire:key='all' class="rounded-xl bg-activeButton text-whiteText  mt-1 pl-2 pr-2 pt-1 pb-1 text-white font-bold" >All</button>
    @else
        <button wire:click="chooseCategory('all')" wire:key='all' class="rounded-xl bg-categoryButton text-purpleText hover:bg-hoverButton mt-1 pl-2 pr-2 pt-1 pb-1  font-bold" >All</button>
    @endif
        
    @foreach($categories as $c)
        @if($clicked == $c['id'])
        <button wire:key="{{$c['id']}}" wire:click="chooseCategory({{$c['id']}})" class="bg-activeButton text-white  mt-1 pl-2 pr-2 pt-1 pb-1 rounded-xl font-bold"}}>
            {{$c['name']}}
        </button>
        @else
        <button wire:key="{{$c['id']}}"wire:click="chooseCategory({{$c['id']}})" class="bg-categoryButton text-purpleText mt-1 hover:bg-hoverButton pl-2 pr-2 pt-1 pb-1 rounded-xl font-bold"}}>
            {{$c['name']}}
        </button>
        @endif
    @endforeach
</div>
