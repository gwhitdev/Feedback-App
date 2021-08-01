<div class="bg-white rounded-xl w-full">
    <img src="{{asset('storage/images/shared/icon-new-feedback.svg')}}" class="relative top-[-25px] left-[50px]">
    <div class="grid grid-rows-5 pl-10 pr-10 pb-10 w-[540px]">
        <div class="row-start-1 row-span-1 h-full">
            <h1 class="font-bold text-lg">Create New Feedback</h1>
        </div>
            <form class="row-start-2 row-span-4 mt-[-25px]" wire:submit.prevent="create"> 
                <div class="row-span-1">
                    <label class="font-bold" for="title">Feedback Title</label><br>
                    <span class="text-[10pt]">Add a short descriptive headline</span>
                    <input class="w-full" type="text" name="title"wire:model='title' >@error('title'){{$message}}@enderror
                </div>
                <div class="row-span-1 mt-5">
                    <label class="font-bold" for="category">Category</label><br>
                    <span class="text-[10pt]">Choose a category for your feedback.</span>
                    <select class="w-full" name="category_id" wire:model='category_id'>
                        <option value="Choose a category">Choose a category</option>
                        @foreach($categories as $category)
                        <option value="{{$category['id']}}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row-span-2 mt-5">
                    @error('category_id') {{$message}} @enderror
                    <label class="font-bold" for="detail">Feedback Detail</label><br>
                    <span class="text-[10pt]">Include any specific comments on what should be improved, added etc.</span>
                    <input class="w-full" type="text" name="detail" wire:model='detail'>@error('detail'){{$message}}@enderror
                </div>
                <div class="row-span-1 mt-5">
                    <div class="float-right">
                        <button class="justify-center flex-none pt-3 pb-3 pl-5 pr-5 bg-darkButton  mt-3 mb-3 mr-7 md:m-3 text-white font-bold rounded-xl">Cancel</button>
                        <livewire:feedback.create-feedback-button wire:click="create" />
                    </div>
                </div>
            </form> 
    </div>
</div>
