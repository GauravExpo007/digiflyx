<footer class="pt-10 bg-black text-white flex flex-col gap-10">

    <!-- Main Grid Section -->
    <div class="p-5 md:px-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-20 border-t border-zinc-500 pt-6">
        <!-- Contact Section -->
        <section class="flex flex-col gap-6 items-center text-center md:items-start md:text-left lg:col-span-2">
            <h2 class="uppercase font-bold text-2xl md:text-3xl lg:text-4xl">WE WOULD LOVE TO HEAR FROM YOU.</h2>
            <p class="text-slate-200 pr-5 md:pr-10">Feel free to reach out if you want to collaborate with us, or
                simply have a
                call.
            </p>
            <ul class="flex flex-col gap-4 text-slate-200">

                <li>
                    <i class="fa fa-map-marker text-[#54547A] pr-3"></i>

                    401, Ryland St. Ste 200-A Reno NV 89502, USA

                </li>
                <li>
                    <i class="fa fa-envelope text-[#54547A] pr-3"></i>
                    <a href="mailto:info@digitalfyx.com" target="_blank" class="hover:text-[#ababcc]">
                        info@digitalfyx.com
                    </a>
                </li>
                <li>
                    <i class="fa fa-phone text-[#54547A] pr-3"></i>
                    <a href="tel:+17026050607" class="hover:text-[#ababcc]">+1(702) 605-0607</a>
                </li>
                <li class="flex gap-3 pt-5 mx-auto lg:mx-0">
                    <a href="https://www.facebook.com/digitalfyx" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-facebook rounded-full border-2 border-[#54547A] p-3 bg-[#54547A] hover:bg-white hover:text-[#54547A] duration-300"></i>
                    </a>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2FDigital_fyx%2F" target="_blank"
                        rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-twitter rounded-full border-2 border-[#54547A] p-3 bg-[#54547A] hover:bg-white hover:text-[#54547A] duration-300"></i>
                    </a>
                    <a href="https://www.instagram.com/digi_talfyx/" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-instagram rounded-full border-2 border-[#54547A] p-3 bg-[#54547A] hover:bg-white hover:text-[#54547A] duration-300"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/digitalfyxx" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-linkedin rounded-full border-2 border-[#54547A] p-3 bg-[#54547A] hover:bg-white hover:text-[#54547A] duration-300"></i>
                    </a>
                </li>

            </ul>
        </section>

        <!-- Company Section -->
        <section class="flex flex-col gap-6 items-center md:items-start">
            <h2 class="uppercase font-bold text-2xl md:text-3xl text-center md:text-left">Company</h2>
            <ul class="flex flex-col items-center md:items-start gap-4 text-slate-200 mx-auto">
                <li><a href="/" class="hover:text-[#ababcc]">Home</a></li>
                <li><a href="{{ route('about-us') }}" class="hover:text-[#ababcc]">About Us</a></li>
                <li><a href="{{ route('blogs') }}" class="hover:text-[#ababcc]">Blogs</a></li>
                <li><a href="{{ route('contact-us') }}" class="hover:text-[#ababcc]">Contact Us</a></li>
            </ul>
        </section>

        <!-- Services Section -->
        <section class="flex flex-col gap-6 items-center md:items-start">
            <h2 class="uppercase font-bold text-2xl md:text-3xl text-center md:text-left">Services</h2>
            <ul class="flex flex-col items-center md:items-start gap-4 text-slate-200 mx-auto">
                <li><a href="{{ route('digital-marketing') }}" class="hover:text-[#ababcc]">Digital Marketing</a></li>
                <li><a href="{{ route('web-design') }}" class="hover:text-[#ababcc]">Web Design</a></li>
                <li><a href="{{ route('social-media') }}" class="hover:text-[#ababcc]">Social Media</a></li>
                <li><a href="{{ route('e-commerce') }}" class="hover:text-[#ababcc]">E-Commerce</a></li>
            </ul>
        </section>

        <!-- Our Apps Section -->
        <section class="flex flex-col gap-6 items-center text-center md:items-start">
            {{-- Top logo section --}}
            <div class="flex justify-center">
                <img src="{{ asset('assets/logo/digitalfyx.gif') }}" alt="Xproo Services Company Logo" width="full">
            </div>
            <p class="text-slate-200">Digitalfyx is a top digital marketing agency in the USA with unrivaled expertise
                in making businesses succeed digitally.</p>
        </section>
    </div>

    <!-- Bottom Section -->
    <div class="border-t border-zinc-500 pt-6 pb-4">
        <div class="px-5 md:px-20 text-center">
            <span>
                Copyright © <span id="year"></span> by
                <a href="https://digitalfyx.com/" target="_blank" rel="noopener noreferrer"
                    class="hover:text-[#ababcc]">Digitalfyx</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>

<script>
    // Dynamically set the current year
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
