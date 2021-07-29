<div>
    
   <x-jet-dropdown :align="'left'">
       <x-slot name="trigger">
           {{ $chosen }}
       </x-slot>
       <x-slot name="content">
           <ul>
               <li wire:click="sortByVotes('desc')">Most votes</li>
               <li wire:click="sortByVotes('asc')">Least votes</li>
               <li wire:click="sortByComments('desc')">Most comments</li>
               <li wire:click="sortByComments('asc')">Least comments</li>
           </ul>
       </x-slot>
   </x-jet-dropdown>
</div>