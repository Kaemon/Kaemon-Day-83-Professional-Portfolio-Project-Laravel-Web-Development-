@props(['education' => collect()])

<section id="education" class="overflow-hidden bg-[#f5f5f7]" style="min-height: 700px;">

    <div class="flex min-h-[700px] items-center justify-center py-[80px] pr-48">

        <div class="flex flex-wrap gap-6" style="max-width: 876px;">

            @foreach($education as $item)
                <article class="edu-card">
                    <section class="edu-card__hero">
                        <img src="{{ \Storage::url($item->image) }}" alt="{{ $item->school }}" class="edu-card__hero-img">
                        <div class="edu-card__hero-content">
                            <span class="edu-card__year">{{ $item->period }}</span>
                            <p class="edu-card__school">{{ $item->school }}</p>
                        </div>
                    </section>
                    <footer class="edu-card__footer">
                        <div class="edu-card__summary">
                            <img src="{{ \Storage::url($item->logo) }}" alt="{{ $item->school }} Logo" class="edu-card__logo-img">
                            <p class="edu-card__degree">{{ $item->degree }}</p>
                        </div>
                        @if($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="edu-card__btn">view</a>
                        @endif
                    </footer>
                </article>
            @endforeach

        </div>

        <div class="ml-80 shrink-0 self-stretch flex items-center">
            <span class="select-none text-[72px] font-bold tracking-tight text-[#1d1d1f]/10"
                  style="writing-mode: vertical-rl; white-space: nowrap;">
                Education
            </span>
        </div>

    </div>

</section>
