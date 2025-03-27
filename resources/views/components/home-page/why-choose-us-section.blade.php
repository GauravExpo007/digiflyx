<div class="w-full min-h-[600px] lg:h-auto flex flex-col md:flex-row justify-center items-center bg-left-top md:bg-right py-5 md:py-10 bg-gradient-to-b from-[#c9ede7] to-[#edbebe]"
    {{-- style="background-image: url('/assets/bg/tt-work-bg.webp')" --}}>
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col gap-5 md:gap-10 w-full lg:w-1/2">

        <h2 class="bg-gradient-to-r from-[#340446] to-[#f31054] bg-clip-text text-transparent text-lg md:text-xl">
            Why Choose Us
        </h2>

        <h3 class="font-semibold text-2xl md:text-3xl lg:text-4xl mx-auto drop-shadow-lg md:tracking-wider">
            Why The <span class="text-[#E91E63] animate-pulse">Digitalfyx</span> Ranked Top Among The Leading Digital
            Marketing Companies
        </h3>

        <div class="py-5 md:pt-0 text-lg md:text-xl lg:text-2xl w-full flex flex-col">
            <p>Digitalfyx: Driving Growth and Amplifying Your Digital Presence</p>
        </div>

        <div class="flex flex-col gap-5 pb-5">
            {{-- 1st-service --}}
            <div class="flex flex-row justify-center gap-5">
                <div class="p-2">
                    <img src="{{ asset('assets/services/computers.svg') }}" alt="digital marketing" width="150" />
                </div>

                <div class="flex flex-col gap-2">
                    <h2 class="text-left text-xl md:text-2xl font-semibold">

                        Streamlined Project Management
                    </h2>
                    <p class="text-sm md:text-base xl:text-lg">Our agency has a solid track record of delivering
                        successful digital marketing campaigns for
                        diverse clients, driving increased website traffic, higher conversion rates, and improved
                        brand
                        visibility.</p>
                </div>

            </div>

            {{-- 2nd-service --}}
            <div class="flex flex-row justify-center gap-5">
                <div class="p-2">

                    <img src="{{ asset('assets/services/worker.svg') }}" alt="digital marketing" width="200" />
                </div>

                <div class="flex flex-col gap-2">
                    <h2 class="text-left text-xl md:text-2xl font-semibold">
                        A Dedicated Team of Experts
                    </h2>
                    <p class="text-sm md:text-base xl:text-lg">Our digital marketing experts have specialized knowledge
                        and skills in areas such as SEO, social media marketing, content marketing, and paid
                        advertising, enabling us to develop effective strategies that align with your business goals.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col gap-5 md:gap-10 w-full lg:w-1/2 object-center bg-no-repeat">
        <div class="w-full flex justify-center animate-slide-in-right">
            <img src="{{ asset('assets/services/company-working.webp') }}"
                class="max-w-full md:max-w-3/4 h-auto hover:scale-105 duration-500 rounded-tr-4xl rounded-bl-4xl" />
        </div>

        {{-- 3rd-service --}}
        <div class="flex justify-center gap-5">
            <div class="p-2">

                <img src="{{ asset('assets/services/deal.svg') }}" alt="digital marketing" width="100" />
            </div>

            <div class="flex flex-col gap-2">
                <h2 class="text-left text-xl md:text-2xl font-semibold">
                    Completion of Project in Given Time
                </h2>
                <p class="text-sm md:text-base xl:text-lg">We prioritize understanding your unique needs and goals,
                    offering personalized attention and exceptional customer service.
                </p>
            </div>
        </div>

        <div class="flex flex-col gap-5 justify-center items-center animate-slide-in-left">
            <h3 class="font-semibold text-2xl md:text-3xl lg:text-4xl mx-auto drop-shadow-lg text-center">
                Let's Start a <span class="text-[#E91E63] animate-pulse"> New Project</span> Together
            </h3>
            <button onclick="openPopup()" type="button"
                class="bg-gradient-to-r from-[#B454E2] via-[#E4715B] to-[#B454E2] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit">
                Request A Quote
            </button>
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById("popupForm").classList.remove("hidden");
    }

    function closePopup() {
        document.getElementById("popupForm").classList.add("hidden");
    }
</script>
