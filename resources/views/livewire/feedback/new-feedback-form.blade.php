<div class="bg-white rounded-xl w-full">
    <img src='{{ Storage::disk('s3')->url('public/images/shared/icon-new-feedback.svg') }}' class="relative top-[-25px] left-[50px]">
    <div class="grid grid-rows-7 pl-10 pr-10 pb-10 w-full">
        <div class="row-start-1 row-span-1 ">
            <h1 class="font-bold text-xl">Create New Feedback</h1>
        </div>
            <form class="row-start-2 row-span-6 mt-5 grid grid-rows-8" wire:submit.prevent="create"> 
                <div class="row-span-1 row-start-1">
                    <label class="font-bold" for="title">Feedback Title</label><br>
                    <span class="text-[10pt]">Add a short descriptive headline</span>
                    <input class="w-3/4 md:w-full border-0 rounded-lg bg-gray-100" type="text" name="title"wire:model='title' ><span class="text-red-500">@error('title'){{ "Can't be empty." }}@enderror</span>
                </div>
                <div class="row-span-1 row-start-2 mt-5">
                    <label class="font-bold" for="category">Category</label><br>
                    <span class="text-[10pt]">Choose a category for your feedback.</span>
                    <select style="background-size: 1em; background-image: url({{ Storage::disk('s3')->url('public/images/shared/icon-arrow-down.svg')}}) class="w-3/4 md:w-full border-0 rounded-lg bg-gray-100" name="category_id" wire:model='category_id'>
                        @foreach($categories as $category)
                        <option value="{{$category['id']}}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                    <span class="text-red-500">@error('category_id'){{ "Please choose a category."}}  @enderror</span>
                </div>
                <div class="row-span-3 mt-5">
                    
                    <label class="font-bold" for="detail">Feedback Detail</label><br>
                    <span class="text-[10pt]">Include any specific comments on what should be improved, added etc.</span>
                    <textarea style="resize:none" class="w-full rounded-lg border-0 bg-gray-100" rows="5" cols="10" class="w-full" type="text" name="detail" wire:model='detail'></textarea>
                    <span class="text-red-500">@error('detail'){{ "Can't be empty." }}@enderror</span>
                </div>
                <div class="row-span-1 mt-5">
                    <div class="md:flex md:float-right justify-center">
                        <button wire:click="cancel" class="w-full md:flex-none md:w-1/2 mx-auto pt-3 pb-3 pl-5 pr-5 hover:bg-darkButtonHover bg-darkButton mt-3 mb-3 mr-7 md:m-3 text-white font-bold rounded-xl">Cancel</button>
                        <livewire:feedback.create-feedback-button wire:click="create" />
                    </div>
                </div>
            </form> 
    </div>
</div>
