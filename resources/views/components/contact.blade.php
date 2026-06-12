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