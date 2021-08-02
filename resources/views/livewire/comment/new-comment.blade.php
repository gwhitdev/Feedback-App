<div class="bg-white rounded-xl p-5 grid grid-rows-4">
    <div class="row-start-1 row-span-1">
        <h1 class="text-lg font-bold">Add a comment</h1>
    </div>
    <form wire:submit.prevent='addComment' class="row-start-2 row-span-3 grid grid-rows-8">
        <div x-data="{chars:false}" class="row-start-1 row-span-1">
            <textarea x-ref="detail" @keydown="$refs.detail.value.length >= 255 ? chars = true : chars = false" @keyup="$refs.charsleft.innerText=255-$refs.detail.value.length" id="detail" wire:model.defer="comment_detail"rows="5"class="w-full border-0 rounded-lg bg-gray-100"></textarea>
            <template x-if="chars">
                <span class="text-red-500">Too many characters!</span>
            </template>
                <span x-ref="charsleft">255</span> characters left
        </div>
        <div class="row-start-2 row-span-1">
            <button class="float-right pt-3 pb-3 pl-4 pr-4 rounded-xl font-bold text-white bg-feedbackButton">
                Post comment
            </button>
        </div>
    </form>
</div>