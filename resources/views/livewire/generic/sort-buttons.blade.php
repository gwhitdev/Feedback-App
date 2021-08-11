   <x-jet-dropdown :align="'left'">
       <x-slot name="trigger">
           Sort by : <span class="cursor-pointer">{{ $chosen }}</span> 
       </x-slot>
       <x-slot name="content">
           <ul class="divide-y text-black divide-gray-300 cursor-pointer ">
               <li class="p-2 hover:text-purple-700" wire:key='1' wire:click="sortByVotes('desc')">Most Upvotes  <img @class(['float-right pt-2' => $chosen == 'Most Upvotes' ? true : false,'hidden' => $chosen != 'Most Upvotes']) src='{{ Storage::disk('s3')->url('public/images/shared/icon-check.svg') }}'></li>
               <li class="p-2 hover:text-purple-700" wire:key='2' wire:click="sortByVotes('asc')">Least Upvotes <img @class(['float-right pt-2' => $chosen == 'Least Upvotes' ? true : false,'hidden' => $chosen != 'Least Upvotes']) src="{{ Storage::disk('s3')->url('public/images/shared/icon-check.svg') }}"></li>
               <li class="p-2 hover:text-purple-700" wire:key='3' wire:click="sortByComments('desc')">Most comments <img  @class(['float-right pt-2' => $chosen == 'Most Comments' ? true : false,'hidden' => $chosen != 'Most Comments']) src="{{ Storage::disk('s3')->url('public/images/shared/icon-check.svg') }}"></li>
               <li class="p-2 hover:text-purple-700" wire:key='4' wire:click="sortByComments('asc')">Least comments <img @class(['float-right pt-2' => $chosen == 'Least Comments' ? true : false,'hidden' => $chosen != 'Least Comments']) src="{{ Storage::disk('s3')->url('public/images/shared/icon-check.svg') }}"></li>
           </ul>
       </x-slot>
   </x-jet-dropdown>