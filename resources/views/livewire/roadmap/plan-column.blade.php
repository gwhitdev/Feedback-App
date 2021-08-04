<div class="mt-5">
    <div>
        <p class="font-bold">{{ $list['title']}} ({{ count($list['data']) }})</p>
        <p>{{ $list['subtitle']}}</p>
    </div>
    <div class="grid grid-col-1 mt-5">
        @foreach($list['data'] as $l)
            <livewire:roadmap.plan-card :title="$list['title']" :item="$l" :color="$list['color']"/>
        @endforeach
    </div>
</div>