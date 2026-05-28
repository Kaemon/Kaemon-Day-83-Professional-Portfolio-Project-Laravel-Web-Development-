<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio Day83</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#000000]">

    {{-- Global Nav — pure black, 44px --}}
    <header class="fixed inset-x-0 top-0 z-50 h-11 bg-black/40 backdrop-blur-md">
        <div class="mx-auto flex h-full max-w-[1440px] items-center justify-between px-6">
            <a href="#" class="-m-1.5 p-1.5">
                <img src="{{ asset('images/logo.png') }}" alt="Portfolio" class="h-8 w-auto">
            </a>
            <nav aria-label="Global" class="hidden items-center gap-5 lg:flex">
                <a href="/" class="text-[12px] leading-none tracking-[-0.12px] text-white/80 hover:text-white">Home</a>
                <a href="#about" class="text-[12px] leading-none tracking-[-0.12px] text-white/80 hover:text-white">About</a>
                <a href="#work" class="text-[12px] leading-none tracking-[-0.12px] text-white/80 hover:text-white">Work</a>
                <a href="#education" class="text-[12px] leading-none tracking-[-0.12px] text-white/80 hover:text-white">Education</a>
                <a href="#hobbies" class="text-[12px] leading-none tracking-[-0.12px] text-white/80 hover:text-white">Hobbies</a>
                <a href="#contact" class="text-[12px] leading-none tracking-[-0.12px] text-white/80 hover:text-white">Contact</a>
            </nav>
        </div>
    </header>

    {{-- Tile 1 — Dark hero, full-bleed photo --}}
    <section class="relative flex min-h-screen items-center justify-center bg-[#272729] pt-11">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('images/hero.jpg') }}" alt=""
                class="h-full w-full object-cover object-[center_8%] opacity-50">
        </div>
        <div class="relative z-10 px-6 py-20 text-center">
            <h1 class="text-pretty text-[40px] font-semibold leading-[1.07] tracking-[-0.28px] text-white sm:text-[56px]">
                Meeting you has been an absolute delight,<br class="hidden sm:block">
                and it truly brightened up my day.
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-[21px] font-normal leading-[1.14] tracking-[0.196px] text-[#cccccc] sm:text-[28px]">
                Let your eyes be the guide to discover the world's most beautiful details.
            </p>
            <div class="mt-8 flex items-center justify-center gap-4">
                <a href="#about"
                    class="inline-block rounded-full bg-[#ffae00] px-[22px] py-[11px] text-[17px] font-normal leading-none text-white transition-transform hover:bg-[#e69e00] active:scale-95">
                    Who am I?
                </a>
            </div>
        </div>
    </section>

    {{-- Tile 2 — Light (parchment), about --}}
    <section id="about" class="overflow-hidden bg-[#f5f5f7]" style="min-height: 700px;">

        {{-- Single flex row: About Me + Card + Photo — shift right by adjusting pl-48 --}}
        <div class="flex min-h-[700px] items-center justify-center pl-48">

            {{-- About Me vertical title as flex item --}}
            <div class="mr-80 shrink-0 self-stretch flex items-center">
                <span class="select-none text-[72px] font-bold tracking-tight text-[#1d1d1f]/10"
                      style="writing-mode: vertical-rl; transform: rotate(180deg); white-space: nowrap;">
                    About Me
                </span>
            </div>

            {{-- Card --}}
            <div class="relative z-10 w-[480px] shrink-0 self-center rounded-2xl bg-white/75 p-10 shadow-xl backdrop-blur-md">
                <h2 class="text-[40px] font-semibold leading-[1.1] text-[#1d1d1f]">Kaemon Ng</h2>
                <p class="mt-1 text-[17px] text-[#6e6e73]">Software Engineer Intern | Freelance Photographer</p>
                <p class="mt-1 text-[14px] text-[#8f8f8f]">Born in 2005, Johor, Malaysia</p>
                <p class="mt-6 text-[17px] leading-[1.47] tracking-[-0.374px] text-[#1d1d1f]">
                    Kaemon Ng is a versatile AI developer, software engineer, and creative visual storyteller based in Malaysia. When he isn't debugging code, building digital tools, or integrating the latest APIs into fresh projects, he is capturing the world through his camera lens. By blending his strong technical programming foundation with a keen eye for photography and video production, Kaemon brings a unique, multidisciplinary perspective to every project he takes on.
                </p>
                <div class="mt-8">
                    <div class="card">
                        <ul>
                            <li class="iso-pro">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="https://www.instagram.com/lifeeeeebobbb/">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                </a>
                                <div class="text">Instagram</div>
                            </li>
                            <li class="iso-pro">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="https://www.linkedin.com/in/kaemon-ng-366a32313">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                                    </svg>
                                </a>
                                <div class="text">LinkedIn</div>
                            </li>
                            <li class="iso-pro">
                                <span></span>
                                <span></span>
                                <span></span>
                                <a href="https://github.com/Kaemon">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 389.5 8 244.8 8z"/>
                                    </svg>
                                </a>
                                <div class="text">GitHub</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Photo — overlaps card right edge, bottom-anchored --}}
            <div class="ml-10 shrink-0 self-end" style="height: 650px;">
                <img src="{{ asset('images/image.png') }}" alt="Kaemon Ng"
                    class="h-full w-auto object-contain object-bottom">
            </div>

        </div>

    </section>

    {{-- Tile 3 — Dark, work experience --}}
    <section id="work" class="bg-[#080808] px-6 py-[80px]">
        <div class="mx-auto max-w-[1600px]">

            <h2 class="text-[56px] font-bold leading-[1.05] tracking-[-1px] text-white text-center">
                Work
            </h2>

            {{-- Entry 1 — purple --}}
            <div class="mt-12 flex items-stretch gap-4">
                <div class="relative w-[49%] shrink-0 overflow-hidden rounded-2xl bg-[#111111] px-8 py-8">
                    <div class="pointer-events-none absolute bottom-[-60px] left-1/2 -translate-x-1/2 h-[280px] w-[280px] rounded-full opacity-75"
                         style="background: radial-gradient(circle at center, #9333ea 0%, #4f1687 55%, transparent 100%); filter: blur(40px);"></div>
                    <div class="relative z-10">
                        <span class="text-[13px] font-medium tracking-wide text-white/40">13 April 2026 — Present</span>
                        <h3 class="mt-3 text-[30px] font-semibold leading-tight text-white">Software Engineer</h3>
                        <p class="mt-1.5 text-[15px] text-white/55">Nedex Group Sdn Bhd</p>
                    </div>
                </div>
                <div class="flex flex-1 items-center rounded-2xl border border-purple-500/40 bg-[#111111] px-8 py-8">
                    <p class="text-[15px] leading-[1.7] text-[#888888]">
                        As a Software Engineer, I have been learning and working with Laravel and Filament, while also testing their AI agents such as MiniCrew, including API integrations and AI-powered photo and video tools like NexDream. I also learning how to build AI skills and working on computer vision projects such as Saman Cam and Pantry Cam. Saman Cam focuses on detecting officers during parking ticket issuance activities, while Pantry Cam is designed to detect who enters the pantry, track the duration of usage, and monitor coffee machine usage analytics.
</p>
                </div>
            </div>

            <div class="my-3 h-px bg-white/[0.06]"></div>

            {{-- Entry 2 — orange/copper --}}
            <div class="flex items-stretch gap-4">
                <div class="relative w-[49%] shrink-0 overflow-hidden rounded-2xl bg-[#111111] px-8 py-8">
                    <div class="pointer-events-none absolute bottom-[-60px] left-1/2 -translate-x-1/2 h-[280px] w-[280px] rounded-full opacity-75"
                         style="background: radial-gradient(circle at center, #c2692a 0%, #7a3010 55%, transparent 100%); filter: blur(40px);"></div>
                    <div class="relative z-10">
                        <span class="text-[13px] font-medium tracking-wide text-white/40">Jan 2026 - Present</span>
                        <h3 class="mt-3 text-[30px] font-semibold leading-tight text-white">Freelance Photographer</h3>
                        <p class="mt-1.5 text-[15px] text-white/55">-</p>
                    </div>
                </div>
                <div class="flex flex-1 items-center rounded-2xl border border-orange-500/40 bg-[#111111] px-8 py-8">
                    <p class="text-[15px] leading-[1.7] text-[#888888]">
                        As a Frelance Photographer, I have managed and executed commercial photography projects, including weddings and Taoist rituals, ensuring high-quality artistic and documentary-style output. I have also handled client communications, including project discussions, quotations, and deliverables, while maintaining strong professional relationships. In addition, I developed advanced photography and post-production skills using tools such as Adobe Suite to produce professional-grade images and media.
                    </p>
                </div>
            </div>

            <div class="my-3 h-px bg-white/[0.06]"></div>

            {{-- Entry 3 — cyan/teal --}}
            <div class="flex items-stretch gap-4">
                <div class="relative w-[49%] shrink-0 overflow-hidden rounded-2xl bg-[#111111] px-8 py-8">
                    <div class="pointer-events-none absolute bottom-[-60px] left-1/2 -translate-x-1/2 h-[280px] w-[280px] rounded-full opacity-75"
                         style="background: radial-gradient(circle at center, #0e7490 0%, #064e63 55%, transparent 100%); filter: blur(40px);"></div>
                    <div class="relative z-10">
                        <span class="text-[13px] font-medium tracking-wide text-white/40">01 Jan 2024 — 15 July 2024</span>
                        <h3 class="mt-3 text-[30px] font-semibold leading-tight text-white">Digitalization & Media Lead</h3>
                        <p class="mt-1.5 text-[15px] text-white/55">Chinese High School Batu Pahat</p>
                    </div>
                </div>
                <div class="flex flex-1 items-center rounded-2xl border border-cyan-600/40 bg-[#111111] px-8 py-8">
                    <p class="text-[15px] leading-[1.7] text-[#888888]">
                        As a Digitalization & Media Lead, I established a digital archive by organizing, scanning, and digitizing historical artifacts and documents, which significantly improved data retrieval efficiency. I also modeled the school library in 3D using Blender and developed the official library website interface to enhance user access to resources. In addition, I directed and produced promotional videos and media for major events such as the History Hall Opening and Classroom Decoration Month, overseeing photography, recording, and editing processes. I also designed opening posters and visual communication materials for the History Hall.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="education" class="overflow-hidden bg-[#f5f5f7]" style="min-height: 700px;">

        <div class="flex min-h-[700px] items-center justify-center pr-48">

            {{-- Two education cards side by side --}}
            <div class="flex shrink-0 gap-6">

                {{-- Card 1 --}}
                <article class="edu-card">
                    <section class="edu-card__hero">
                        <img src="{{ asset('images/chsbp.jpg') }}" alt="School campus" class="edu-card__hero-img">
                        <div class="edu-card__hero-content">
                            <span class="edu-card__year">2018 — 2023</span>
                            <p class="edu-card__school">Chinese High School Batu Pahat</p>
                        </div>
                    </section>
                    <footer class="edu-card__footer">
                        <div class="edu-card__summary">
                            <img src="{{ asset('images/CHSBP_Logo.png.gif') }}" alt="CHSBP Logo" class="edu-card__logo-img">
                            <p class="edu-card__degree">UEC & High School Graduate</p>
                        </div>
                        <a href="https://chsbp.edu.my/" class="edu-card__btn">view</a>
                    </footer>
                </article>

                {{-- Card 2 — APU --}}
                <article class="edu-card">
                    <section class="edu-card__hero">
                        <img src="{{ asset('images/apu.jpg') }}" alt="APU Campus" class="edu-card__hero-img">
                        <div class="edu-card__hero-content">
                            <span class="edu-card__year">2024 — Present</span>
                            <p class="edu-card__school">Asia Pacific University of Technology & Innovation</p>
                        </div>
                    </section>
                    <footer class="edu-card__footer">
                        <div class="edu-card__summary">
                            <img src="{{ asset('images/APU_logo.png') }}" alt="APU Logo" class="edu-card__logo-img">
                            <p class="edu-card__degree">Candidate for Bachelor of Computer Science (Hons) Artificial Intelligence</p>
                        </div>
                        <a href="https://www.apu.edu.my/" class="edu-card__btn">view</a>
                    </footer>
                </article>

            </div>

            {{-- Education vertical title on right --}}
            <div class="ml-80 shrink-0 self-stretch flex items-center">
                <span class="select-none text-[72px] font-bold tracking-tight text-[#1d1d1f]/10"
                      style="writing-mode: vertical-rl; white-space: nowrap;">
                    Education
                </span>
            </div>

        </div>

    </section>

    <section id="hobbies" class="overflow-hidden bg-[#080808]" style="min-height: 700px;">
        <div class="flex min-h-[700px] items-center justify-center py-[80px]">

            {{-- Left: vertical label (same style as About Me) --}}
            <div class="-ml-20 mr-16 shrink-0 self-stretch flex items-center">
                <span class="select-none text-[72px] font-bold tracking-tight text-white"
                      style="writing-mode: vertical-rl; transform: rotate(180deg); white-space: nowrap;">
                    Hobbies
                </span>
            </div>

            {{-- Right: masonry photo wall --}}
            <div style="width: 900px; transform: translateX(160px);">
                <div class="hobby-masonry">
                    @foreach(range(1, 12) as $i)
                    <div class="hobby-masonry-item">
                        <img src="{{ asset('images/hobby-' . $i . '.jpg') }}" alt="Hobby {{ $i }}"
                             onerror="this.style.display='none';this.parentElement.classList.add('hobby-masonry-placeholder')">
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>


    {{-- Contact section --}}
    <section id="contact" class="bg-[#f5f5f7] px-6 py-[120px]">
        <div class="flex flex-col items-center justify-center gap-6">
            <h2 class="text-[56px] font-bold leading-tight text-[#1d1d1f]">Get In Touch</h2>
            <p class="text-[17px] text-[#6e6e73]">Have a project in mind? Let's talk.</p>

            <button class="contact-btn" id="contactBtn">
                Get in touch
                <div class="star-1"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 784.11 815.53"><g id="Layer_x0020_1"><path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path></g></svg></div>
                <div class="star-2"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 784.11 815.53"><g id="Layer_x0020_1"><path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path></g></svg></div>
                <div class="star-3"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 784.11 815.53"><g id="Layer_x0020_1"><path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path></g></svg></div>
                <div class="star-4"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 784.11 815.53"><g id="Layer_x0020_1"><path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path></g></svg></div>
                <div class="star-5"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 784.11 815.53"><g id="Layer_x0020_1"><path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path></g></svg></div>
                <div class="star-6"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 784.11 815.53"><g id="Layer_x0020_1"><path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path></g></svg></div>
            </button>
        </div>

        {{-- Contact Modal --}}
        <div id="contactModal" class="contact-modal-overlay" style="display:none;">
            <div class="contact-modal-box">
                <button class="contact-modal-close" id="closeModal">&#x2715;</button>
                <h3 class="contact-modal-title">Contact Me</h3>
                <p class="contact-modal-sub">Fill in the form and I'll get back to you.</p>
                <form id="contactForm" class="contact-form">
                    <div class="contact-form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="contact-form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="your@email.com" required>
                    </div>
                    <div class="contact-form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" placeholder="Your message..." required></textarea>
                    </div>
                    <button type="submit" class="contact-form-submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        const btn = document.getElementById('contactBtn');
        const modal = document.getElementById('contactModal');
        const closeBtn = document.getElementById('closeModal');
        const form = document.getElementById('contactForm');

        btn.addEventListener('click', () => modal.style.display = 'flex');
        closeBtn.addEventListener('click', () => modal.style.display = 'none');
        modal.addEventListener('click', (e) => { if (e.target === modal) modal.style.display = 'none'; });

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = form.querySelector('.contact-form-submit');
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            try {
                const res = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        name: form.name.value,
                        email: form.email.value,
                        message: form.message.value,
                    }),
                });
                if (res.ok) {
                    submitBtn.textContent = 'Sent!';
                    form.reset();
                    setTimeout(() => { modal.style.display = 'none'; submitBtn.textContent = 'Send Message'; submitBtn.disabled = false; }, 1500);
                } else {
                    throw new Error();
                }
            } catch {
                submitBtn.textContent = 'Failed — try again';
                submitBtn.disabled = false;
            }
        });
    </script>

    {{-- Footer — parchment --}}
    <footer class="bg-[#080808] px-6 py-16">
        <div class="mx-auto max-w-[1440px]">
            <p class="text-[12px] leading-none tracking-[-0.12px] text-[#6e6e73]">
                Copyright © 2026 Day83. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>
