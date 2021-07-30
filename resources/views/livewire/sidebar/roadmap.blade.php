<div class="grid grid-cols-4 grid-rows-5 w-full p-3">
    <div class="row-span-1 col-span-4 w-full">
        <span class="font-bold">Road Map</span><span class="mr-3 float-right"><a class="hover:text-blue-400 hover:underline" href="/roadmap">View</a></span>
    </div>

    <div class="mt-5 items-center col-span-4 row-span-4 grid grid-cols-8 w-full h-full">
        
        @foreach($status_list as $s)
        
           <livewire:sidebar.roadmap-row :status=$s />
        
        @endforeach
        
    </div>
</div>
