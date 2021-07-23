<div>
    <button :wire:key="1"wire:click="sort(['comments','asc'])">Sort by comment ASC</button>
    <button :wire:key="2"wire:click="sort(['comments','desc'])">Sort by comment DESC</button>

    <button :wire:key="3"wire:click="sort(['votes','asc'])">Sort by votes ASC</button>
    <button :wire:key="4" wire:click="sort(['votes','desc'])">Sort by votes DESC</button>
</div>