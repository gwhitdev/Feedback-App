<div>
    <button wire:click="sort(['count_comments','asc'])">Sort by comment ASC</button>
    <button wire:click="sort(['count_comments','desc'])">Sort by comment DESC</button>

    <button wire:click="sort(['votes','asc'])">Sort by votes ASC</button>
    <button wire:click="sort(['votes','desc'])">Sort by votes DESC</button>
</div>