@props(['hero' => null])

<section id="home" class="relative flex min-h-screen items-center justify-center bg-[#272729] pt-11">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ $hero?->image ? \Storage::url($hero->image) : asset('images/hero.jpg') }}" alt=""
            class="h-full w-full object-cover object-[center_8%] opacity-50">
    </div>
    <div class="relative z-10 px-6 py-20 text-center">
        <h1 class="mx-auto max-w-5xl text-pretty text-[40px] font-semibold leading-[1.07] tracking-[-0.28px] text-white sm:text-[56px]">
            {{ $hero?->title }}
        </h1>
        <p class="mx-auto mt-6 max-w-5xl text-[21px] font-normal leading-[1.14] tracking-[0.196px] text-[#cccccc] sm:text-[28px]">
            {{ $hero?->subtitle }}
        </p>
        <div class="mt-8 flex items-center justify-center gap-4">
            <a href="#about"
                class="inline-block rounded-full bg-[#ffae00] px-[22px] py-[11px] text-[17px] font-normal leading-none text-white transition-transform hover:bg-[#e69e00] active:scale-95">
                {{ $hero?->button_text }}
            </a>
        </div>
    </div>
</section>