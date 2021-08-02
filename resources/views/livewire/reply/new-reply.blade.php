<form wire:submit.prevent="addReply">
<div class="float-left">
    <textarea wire:model="reply_detail" class="border-0 rounded-lg bg-gray-100 w-[350px]"></textarea>
</div>
<div class="float-left">
    <button class="bg-feedbackButton ml-3 rounded-lg text-white text-sm font-bold px-3 py-2">
        Post reply
    </button>
</div>
</form>
