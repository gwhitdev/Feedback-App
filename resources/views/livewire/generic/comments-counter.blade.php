<div class="bg-blue flex justify-center mt-7 h-4 items-center">
    <img class="h-auto"src='{{ Storage::disk('s3')->url('public/images/shared/icon-comments.svg') }}'>
    <span class="ml-3"><b>{{ $total_comments }}</b></span>
</div>