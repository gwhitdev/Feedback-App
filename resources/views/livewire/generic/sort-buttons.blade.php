   <x-jet-dropdown :align="'left'">
       <x-slot name="trigger">
           Sort by: <span class="cursor-pointer">{{ $chosen }}</span>
       </x-slot>
       <x-slot name="content">
           <ul class="divide-y text-black divide-gray-300 cursor-pointer ">
               <li class="p-2 hover:text-purple-700" wire:click="sortByVotes('desc')">Most votes</li>
               <li class="p-2 hover:text-purple-700" wire:click="sortByVotes('asc')">Least votes</li>
               <li class="p-2 hover:text-purple-700" wire:click="sortByComments('desc')">Most comments</li>
               <li class="p-2 hover:text-purple-700" wire:click="sortByComments('asc')">Least comments</li>
           </ul>
       </x-slot>
   </x-jet-dropdown>