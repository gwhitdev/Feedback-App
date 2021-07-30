<div class="grid grid-cols-4 grid-rows-5 w-full p-3">
    <div class="row-span-1 col-span-4 w-full">
        Road Map
    </div>

    <div class="mt-5 items-center col-span-4 row-span-4 grid grid-cols-8 w-full h-full">
        
        @foreach($status_list as $s)
        
           <livewire:sidebar.roadmap-row :status=$s />
        
        @endforeach
        
    </div>
</div>
