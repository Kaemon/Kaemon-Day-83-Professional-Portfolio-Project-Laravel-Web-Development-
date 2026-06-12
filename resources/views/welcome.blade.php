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
    <x-nav :setting="$setting" />

    {{-- Tile 1 — Dark hero, full-bleed photo --}}
    <x-hero :hero="$hero"/>

    {{-- Tile 2 — Light (parchment), about --}}
    <x-about :about="$about"/>

    {{-- Tile 3 — Dark, work experience --}}
    <x-work :work="$work"/>

    {{-- Tile 4 — Light (parchment), education --}}
    <x-education :education="$education"/>

    {{-- Tile 5 — Dark, hobbies with masonry photo wall --}}
    <x-hobbies :hobbies="$hobbies"/>

    {{-- Contact section --}}
    <x-contact />

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
    <x-footer />

</body>
</html>
