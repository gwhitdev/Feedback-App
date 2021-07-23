<div>
    @foreach($categories as $c)
        <button wire:click="chooseCategory({{$c['id']}})">
            {{$c['name']}}
        </button>
    @endforeach
</div>
