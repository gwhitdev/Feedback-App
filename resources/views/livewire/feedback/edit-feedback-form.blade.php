<div class="bg-white rounded-xl w-full mx-5">
    <img src="{{asset('storage/images/shared/icon-new-feedback.svg')}}" class="relative top-[-25px] left-[50px]">
    <div class="grid grid-rows-7 pl-5 pr-5 pb-10 w-full ">
        <div class="row-start-1 row-span-1 ">
            <h1 class="font-bold text-xl">Editing '{{ $feedback->title }}'</h1>
        </div>
            <form class="row-start-2 row-span-6 mt-5 grid grid-rows-10" wire:submit.prevent="save"> 
                <div class="row-span-1 row-start-1">
                    <label class="font-bold" for="title">Feedback Title</label><br>
                    <span class="text-[10pt]">Add a short descriptive headline</span>
                    <input class="w-full md:w-full border-0 rounded-lg bg-gray-100" type="text" name="title"wire:model='title' ><span class="text-red-500">@error('title'){{ "Can't be empty." }}@enderror</span>
                </div>
                <div class="row-span-1 row-start-2 mt-5">
                    <label class="font-bold" for="category">Category</label><br>
                    <span class="text-[10pt]">Choose a category for your feedback.</span>
                    <select style="background-size: 1em; background-image: url({{asset('storage/images/shared/icon-arrow-down.svg')}})"class="w-full border-0 rounded-lg bg-gray-100" name="category_id" wire:model='category_id'>
                        @foreach($categories as $category)
                        <option value="{{$category['id']}}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                    <span class="text-red-500">@error('category_id'){{ "Please choose a category."}}  @enderror</span>
                </div>
                <div class="row-span-1 row-start-3 mt-5">
                    <label class="font-bold" for="category">Update Status</label><br>
                    <span class="text-[10pt]">Change feature state.</span>
                    <select style="background-size: 1em; background-image: url({{asset('storage/images/shared/icon-arrow-down.svg')}})"class="w-full border-0 rounded-lg bg-gray-100" name="status_id" wire:model='status_id'>
                        @foreach($status_list as $status)
                        <option value="{{$status['id']}}">{{ $status['status'] }}</option>
                        @endforeach
                    </select>
                    <span class="text-red-500">@error('category_id'){{ "Please choose a category."}}  @enderror</span>
                </div>
                
                <div class="row-span-3 mt-5">
                    
                    <label class="font-bold" for="detail">Feedback Detail</label><br>
                    <div class="text-[10pt]">Include any specific comments on what should be improved, added etc.</div>
                    <textarea style="resize:none" class="w-full rounded-lg border-0 bg-gray-100" rows="5" cols="10" type="text" name="detail" wire:model='detail'></textarea>
                    <span class="text-red-500">@error('detail'){{ "Can't be empty." }}@enderror</span>
                </div>
                <div class="row-span-1 mt-5 w-full justify-center">
                    <div class=" md:float-left justify-center md:flex w-full">
                        
                            <button wire:click="delete" class="w-full md:flex-grow-0 md:float-left md:w-2/6 mx-auto pt-3 pb-3 pl-2 pr-2  hover:bg-redButtonHover bg-redButton  mt-3 mb-3 mr-7 md:m-3 text-white font-bold rounded-xl">
                                Delete
                            </button>
                        
                        
                        
                            <button href="/feedback" class="w-full md:flex-none-0 md:float-right md:w-3/6 mx-auto pt-3 pb-3  hover:bg-darkButtonHover bg-darkButton  mt-3 mb-3 mr-7 md:m-3 text-white font-bold rounded-xl">Cancel</button>
                            <button wire:click="save" class="w-full md:flex-grow-x md:float-right md:w-11/12 mx-auto pt-3 pb-3 px-2 hover:bg-purpleButtonHover bg-feedbackButton  mt-3 mb-3 md:m-3 text-white font-bold rounded-xl" >
                                Save changes
                            </button>
                        
                        
                        
                    </div>
                </div>
            </form> 
    </div>
</div>
