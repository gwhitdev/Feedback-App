

<div class="py-3 m-3 mb-5 bg-white rounded-xl">
    <div class="grid grid-cols-8 grid-rows-1 p-3">
        <div  class="col-span-1 ">
            <livewire:feedback.vote-button :key="$feedback->id" :feedback="$feedback"/>
        </div>
        <div class="col-span-6 ml-3 "> 
            <h2><a href="/feedback/{{$feedback->id}}"><b>{{ $feedback->title }}</b></a></h2>
            <p>{{ $feedback->detail }}</p>
            <livewire:generic.category-badge :key="$feedback->id" :category="$feedback->category->name" />
        </div>
        <div class="col-span-1 "> 
            <livewire:generic.comments-counter :key="$feedback->id" :comments="$feedback->comments" />
        </div>
        
    </div>
    
</div>