<div class="w-full flex flex-col justify-center items-center mx-auto gap-5 md:gap-10 lg:gap-20 py-10 md:py-20 bg-left-top md:bg-right"
    style="background-image: url('/assets/bg/tt-work-bg.webp')">
    <!-- About Company Overview -->
    <div class="flex flex-col md:flex-row items-center gap-6 md:w-[90%]">
        <div class="flex flex-col gap-5 p-5 w-full md:w-1/2">
            <h2 class="bg-gradient-to-r from-[#340446] to-[#f31054] bg-clip-text text-transparent text-lg md:text-xl">
                OUR PHILOSOPHY
            </h2>
            <h3 class=" md:w-[80%] text-3xl md:text-4xl font-semibold text-left">
                Rule the<span class="text-[#E91E63] animate-pulse"> Digital</span> Realm
            </h3>
            <p class="text-justify leading-8 text-slate-700">
                Digital marketing services unleash your online potential! With unrivaled SEO techniques, PPC campaigns,
                Email marketing, and data-driven Google Analytics from Digitalfyx, you can propel your brand to the
                forefront of the digital landscape.
            </p>

            <a href="{{ route('contact-us') }}"
                class="bg-gradient-to-r from-[#B454E2] via-[#E4715B] to-[#B454E2] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit animate-right">
                Get In Touch
            </a>
        </div>
        <div>
            <section class="grid grid-cols-1 sm:grid-cols-2 gap-5 p-3 md:p-6 justify-center items-center">
                <!-- Type-1 -->
                <div
                    class="relative group overflow-hidden shadow-md hover:shadow-xl transition duration-300 hover:scale-105 h-full min-h-[150px] bg-white  rounded-tr-4xl rounded-bl-4xl flex flex-col justify-center items-center">
                    <div class="flex justify-between items-center p-5 ">
                        <div class="flex flex-col gap-3">
                            <p class="text-xs md:text-sm lg:text-base uppercase text-gray-600">Search engine
                                optimization
                            </p>
                            <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-[#E91E63] animate-pulse">
                                SEO</h2>
                        </div>
                        <img src="{{ asset('assets/seo/technical-seo.webp') }}" alt="Technical SEO"
                            class="w-1/4 h-20 object-cover">
                    </div>

                    <a href="{{ route('seo') }}"
                        class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-90 w-full h-full">
                        <div class="flex flex-col w-3/4 text-center">
                            <h2 class="text-lg font-bold text-[#E91E63] animate-pulse">SEO</h2>
                            <p class="text-xs md:text-sm text-gray-300">Stay always on the top of Google Search and
                                other Search Engine rankings with our results-driven SEO solution.</p>
                        </div>
                    </a>
                </div>

                <!-- Type-2 -->
                <div
                    class="relative group overflow-hidden shadow-md hover:shadow-xl transition duration-300 hover:scale-105 h-full min-h-[150px] bg-white rounded-tr-4xl rounded-bl-4xl flex flex-col justify-center items-center">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col gap-3">
                            <p class="text-xs md:text-sm lg:text-base uppercase text-gray-600">Pay Per Click</p>
                            <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-[#E91E63] animate-pulse">PPC
                            </h2>
                        </div>
                        <img src="{{ asset('assets/seo/local-seo.webp') }}" alt="Local SEO"
                            class="w-1/4 h-20 object-cover">
                    </div>

                    <a href="{{ route('ppc') }}"
                        class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-90 w-full h-full">
                        <div class="flex flex-col w-3/4 text-center">
                            <h2 class="text-lg font-bold text-[#E91E63] animate-pulse">PPC</h2>
                            <p class="text-xs md:text-sm text-gray-300">
                                PPC helps businesses maximize their ROI, conversion rate, and profitability.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Type-3 -->
                <div
                    class="relative group overflow-hidden shadow-md hover:shadow-xl transition duration-300 hover:scale-105 h-full min-h-[150px] bg-white rounded-tr-4xl rounded-bl-4xl flex flex-col justify-center items-center">
                    <div class="flex justify-between items-center p-5">
                        <div class="flex flex-col gap-3">
                            {{-- <p class="text-xs md:text-sm lg:text-base uppercase text-gray-600">E-Commerce search engine
                                optimization
                            </p> --}}
                            <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-[#E91E63] animate-pulse">Content
                                Creation</h2>
                        </div>
                        <img src="{{ asset('assets/seo/e-commerce-seo.webp') }}" alt="Technical SEO"
                            class="w-1/4 h-20 object-cover">
                    </div>

                    <a href="{{ route('content-creation') }}"
                        class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-90 w-full h-full">
                        <div class="flex flex-col w-3/4 text-center">
                            <h2 class="text-lg font-bold text-[#E91E63] animate-pulse">Content Creation
                            </h2>
                            <p class="text-xs md:text-sm text-gray-300">Content creation services enable your audience
                                to connect with you and hear your narrative.</p>
                        </div>
                    </a>
                </div>

                <!-- Type-4 -->
                <div
                    class="relative group overflow-hidden shadow-md hover:shadow-xl transition duration-300 hover:scale-105 h-full min-h-[150px] bg-white rounded-tr-4xl rounded-bl-4xl flex flex-col justify-center items-center">
                    <div class="flex justify-between items-center gap-10">
                        <div class="flex flex-col gap-3">
                            {{-- <p class="text-xs md:text-sm lg:text-base uppercase text-gray-600">back link creation
                                service</p> --}}
                            <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-[#E91E63] animate-pulse">Email
                                <br />
                                Marketing
                            </h2>
                        </div>
                        <img src="{{ asset('assets/seo/link-building-service.webp') }}" alt="Local SEO"
                            class="w-1/3 h-20 object-cover">
                    </div>

                    <a href="{{ route('email-marketing') }}"
                        class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-90 w-full h-full">
                        <div class="flex flex-col w-3/4 text-center">
                            <h2 class="text-lg font-bold text-[#E91E63] animate-pulse">Email Marketing</h2>
                            <p class="text-xs md:text-sm text-gray-300">
                                An email marketing campaign is the best tool to build stronger relationships with your
                                customers and generate quality leads.
                            </p>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </div>
</div>
