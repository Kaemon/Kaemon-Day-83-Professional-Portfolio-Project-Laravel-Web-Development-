@props(['hobbies' => collect()])

<section id="hobbies" class="overflow-hidden bg-[#080808]" style="min-height: 700px;">
    <div class="flex min-h-[700px] items-center justify-center py-[80px]">

        <div class="-ml-20 mr-16 shrink-0 self-stretch flex items-center">
            <span class="select-none text-[72px] font-bold tracking-tight text-white"
                  style="writing-mode: vertical-rl; transform: rotate(180deg); white-space: nowrap;">
                Hobbies
            </span>
        </div>

        <div style="width: 900px; transform: translateX(160px);">
            <div class="hobby-masonry">
                @foreach($hobbies as $photo)
                    <div class="hobby-masonry-item">
                        <img src="{{ \Storage::url($photo->image) }}" alt="Hobby photo">
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
