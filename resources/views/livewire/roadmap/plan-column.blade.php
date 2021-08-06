@php
    $title = strtolower("{$list['title']}");
    if($title == 'in-progress') $title = 'progress';
@endphp
<div class="mt-5 grid grid-cols-3 md:grid-cols-1">
    <div class="hidden md:block" @click=" selected !== '{{$title}}' ? selected = '{{$title}}' : selected = null" >
        <p class="font-bold">{{ $list['title']}} ({{ count($list['data']) }})</p>
        <p>{{ $list['subtitle']}}</p>
    </div>
    
    <div x-show="selected === '{{$title}}'" class="w-screen grid grid-col-1 md:hidden">
        @foreach($list['data'] as $l)
            <livewire:roadmap.plan-card :title="$list['title']" :item="$l" :color="$list['color']"/>
        @endforeach
    </div>
    <div class="hidden md:grid grid-col-1 mt-5">
        @foreach($list['data'] as $l)
            <livewire:roadmap.plan-card :title="$list['title']" :item="$l" :color="$list['color']"/>
        @endforeach
    </div>
</div>

