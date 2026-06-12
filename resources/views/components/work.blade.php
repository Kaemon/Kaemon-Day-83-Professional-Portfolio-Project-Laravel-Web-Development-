@props(['work' => collect()])

@php
$colorMap = [
    'red'    => ['from' => '#dc2626', 'to' => '#7f1d1d', 'border' => 'rgba(220,38,38,0.4)'],
    'orange' => ['from' => '#c2692a', 'to' => '#7a3010', 'border' => 'rgba(249,115,22,0.4)'],
    'yellow' => ['from' => '#ca8a04', 'to' => '#713f12', 'border' => 'rgba(234,179,8,0.4)'],
    'green'  => ['from' => '#16a34a', 'to' => '#14532d', 'border' => 'rgba(22,163,74,0.4)'],
    'cyan'   => ['from' => '#0e7490', 'to' => '#064e63', 'border' => 'rgba(8,145,178,0.4)'],
    'blue'   => ['from' => '#2563eb', 'to' => '#1e3a8a', 'border' => 'rgba(59,130,246,0.4)'],
    'purple' => ['from' => '#9333ea', 'to' => '#4f1687', 'border' => 'rgba(147,51,234,0.4)'],
];
@endphp

<section id="work" class="bg-[#080808] px-6 py-[80px]">
    <div class="mx-auto max-w-[1600px]">

        <h2 class="text-center text-[56px] font-bold leading-[1.05] tracking-[-1px] text-white">
            Work
        </h2>

        @foreach($work as $item)
            @php $colors = $colorMap[$item->gradient_color] ?? $colorMap['purple']; @endphp

            @if(! $loop->first)
                <div class="my-3 h-px bg-white/[0.06]"></div>
            @endif

            <div class="{{ $loop->first ? 'mt-12 ' : '' }}flex items-stretch gap-4">
                <div class="relative w-[49%] shrink-0 overflow-hidden rounded-2xl bg-[#111111] px-8 py-8">
                    <div class="pointer-events-none absolute bottom-[-60px] left-1/2 -translate-x-1/2 h-[280px] w-[280px] rounded-full opacity-75"
                         style="background: radial-gradient(circle at center, {{ $colors['from'] }} 0%, {{ $colors['to'] }} 55%, transparent 100%); filter: blur(40px);"></div>
                    <div class="relative z-10">
                        <span class="text-[13px] font-medium tracking-wide text-white/40">{{ $item->period }}</span>
                        <h3 class="mt-3 text-[30px] font-semibold leading-tight text-white">{{ $item->role }}</h3>
                        <p class="mt-1.5 text-[15px] text-white/55">{{ $item->company }}</p>
                    </div>
                </div>
                <div class="flex flex-1 items-center rounded-2xl border bg-[#111111] px-8 py-8"
                     style="border-color: {{ $colors['border'] }}">
                    <p class="text-[15px] leading-[1.7] text-[#888888]">{{ $item->description }}</p>
                </div>
            </div>
        @endforeach

    </div>
</section>
