<x-public-layout>
    <x-works.banner-section />
    <div class="container mx-auto py-10 px-5">
        <h3
            class="bg-gradient-to-r from-[#340446] to-[#f31054] bg-clip-text text-transparent text-lg md:text-xl uppercase">
            DISCOVER OUR CASES</h3>
        <h2 class="text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 my-2 md:my-5">Latest <span
                class="text-[#E91E63] animate-pulse"> Projects</span> </h2>

        <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Large Featured Project -->
            <div class="relative group md:col-span-2 overflow-hidden rounded-lg">
                <img src="{{ asset('assets/works/project-1.webp') }}" alt="Project 1" class="w-full h-full object-cover">
                <div
                    class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-80">
                    <div class="flex flex-col gap-5 w-1/2">
                        <p class="text-sm md:text-base lg:text-lg text-gray-300">DESIGN | DEVELOPMENT | TECHNOLOGY
                        </p>
                        <a href="#">
                            <h2
                                class="text-xl md:text-2xl lg:text-4xl hover:underline font-bold text-[#E91E63] animate-pulse">
                                Messe Masters
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Smaller Projects (Stacked in a column) -->
            <section class="grid grid-cols-1 col-span-2 gap-6">
                <!-- Project 2 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="{{ asset('assets/works/project-2.webp') }}" alt="Project 2"
                        class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-80">
                        <div class="flex flex-col gap-5 w-1/2">
                            <p class="text-sm md:text-base lg:text-lg text-gray-300">DESIGN | DEVELOPMENT
                            </p>
                            <a href="#">
                                <h2
                                    class="text-xl md:text-2xl lg:text-4xl hover:underline font-bold text-[#E91E63] animate-pulse">
                                    Expo Stand Germany
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
                <section class="grid grid-cols-2 gap-6">
                    <!-- Project 3 -->
                    <div class="relative group overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/works/project-3.webp') }}" alt="Project 3"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-80">
                            <div class="flex flex-col gap-5 px-5">
                                <p class="text-sm md:text-base lg:text-lg text-gray-300">DESIGN | DEVELOPMENT |
                                    TECHNOLOGY
                                </p>
                                <a href="#">
                                    <h2
                                        class="text-xl md:text-2xl lg:text-4xl hover:underline font-bold text-[#E91E63] animate-pulse">
                                        Expostand USA
                                    </h2>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="relative group overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/works/project-4.webp') }}" alt="Project 4"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black flex items-center justify-center transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 opacity-80">
                            <div class="flex flex-col gap-5 px-5">
                                <p class="text-sm md:text-base lg:text-lg text-gray-300">DESIGN | DEVELOPMENT |
                                    TECHNOLOGY
                                </p>
                                <a href="#" class="">
                                    <h2
                                        class="text-xl md:text-2xl lg:text-4xl hover:underline font-bold text-[#E91E63] animate-pulse">
                                        Trade Pros
                                    </h2>
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </div>

</x-public-layout>
