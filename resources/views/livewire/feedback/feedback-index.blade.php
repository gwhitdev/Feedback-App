<div class="grid grid-columns-4 grid-rows-4">
    <div class="col-span-2 bg-red-50 col-start-1 row-span-1">
        Feedback:
        <ul>
            @foreach($feedback as $f)
            <li>{{ $f->title }} Votes:{{$f->votes}}</li>
            @endforeach
        </ul>
       
    </div>
    <div class="col-span-2 col-start-3 row-span-1 ">
        
        Categories:
        
        <livewire:generic.category-button :categories="$categories" />
        
        <div>
            <livewire:generic.sort-buttons />
        </div>
    </div>
    <div class="col-span-2 col-start-1 row-span-1 row-start-2 bg-blue-50">
        <livewire:feedback.new-feedback-form :categories="$categories"/>
    </div>
    