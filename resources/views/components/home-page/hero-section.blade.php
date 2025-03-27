<div id="vanta-bg"
    class="text-white w-full overflow-x-hidden min-h-[600px] lg:h-auto flex flex-col lg:flex-row justify-center items-center bg-center md:bg-right">
    <section
        class="max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col gap-5 md:gap-10 w-full lg:w-2/5 animate-slide-in-left object-center bg-no-repeat bg-fixed">
        <h1
            class="font-semibold text-2xl md:text-3xl lg:text-4xl mt-[5%] mx-auto drop-shadow-lg md:tracking-wider [text-shadow:2px_2px_#ff0000]">
            Experience Unparalleled Digital <span class="border-b-2 text-[#38FFF9]">Success</span> with
            <span class="text-[#38FFF9] animate-pulse">Digitalfyx</span>
        </h1>

        <div class="py-5 text-lg md:text-xl lg:text-2xl w-full flex flex-col">
            <p>Drive Grow and Dominate the Digital Space with our Digital Marketing Expertise.</p><br />
            <a href="{{ route('contact-us') }}"
                class="bg-gradient-to-r from-[#B454E2] via-[#E4715B] to-[#B454E2] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit">
                Let's Talk
            </a>
        </div>
    </section>


    <section class="max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col gap-5 md:gap-10 w-full lg:w-3/5 animate-slide-in-right">
        <div class="pb-10">
            <div class="flex flex-col md:flex-row justify-center items-center gap-5">
                <a href="https://www.youtube.com/" target="_blank">
                    <i class="fa fa-play-circle text-6xl bg-red-600 rounded-full hover:scale-105 duration-500"></i>
                </a>
                <h2 class="text-white text-left text-xl md:text-2xl font-semibold py-5 md:py-10 uppercase md:w-[80%]">

                    We design digital solutions
                    for <span class="text-[#FFF000]">brands and companies</span>
                </h2>
            </div>

            <div class="max-w-screen-xl mx-auto overflow-hidden slider ">
                <!-- Slides will be dynamically inserted here -->
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sliderData = [{
                id: 1,
                link: "{{ route('digital-marketing') }}",
                image: "/assets/our-services/digital-marketing.png",
                title: "Digital Marketing",
            },
            {
                id: 2,
                link: "{{ route('web-design') }}",
                image: "/assets/our-services/web-design.png",
                title: "Web Design",
            },
            {
                id: 3,
                link: "{{ route('social-media') }}",
                image: "/assets/our-services/social-media.png",
                title: "Social Media",
            },
            {
                id: 4,
                link: "{{ route('e-commerce') }}",
                image: "/assets/our-services/e-commerce.png",
                title: "E-Commerce",
            },
            {
                id: 5,
                link: "{{ route('app-development') }}",
                image: "/assets/our-services/app-development.svg",
                title: "App Development",
            },
        ];

        const slider = document.querySelector(".slider");

        // Generate slides dynamically
        slider.innerHTML = sliderData
            .map(
                ({
                    link,
                    title,
                    image
                }) => `
        <a href="${link}" class="px-3">
            <div class="text-center shadow-lg hover:shadow-black border-2 border-slate-500 w-full h-80 lg:h-52 p-2 bg-transparent hover:shadow-xl hover:scale-95 transform duration-500 rounded-lg relative overflow-hidden flex flex-col items-center justify-between">
                
                <!-- Image container -->
                <div class="w-full h-fit lg:w-48 lg:h-32 mb-4 flex justify-center items-center rounded-lg overflow-hidden">
                    <img src="${image}" alt="${title} logo" class="w-full h-full" loading="lazy" />
                </div>
                
                <!-- Title -->
                <h3 class="text-white font-semibold animate-pulse text-lg font-semibold uppercase text-center leading-snug px-2">
                    ${title}
                </h3>
            </div>
        </a>
    `
            )
            .join("");


        // Initialize Slick Carousel
        $(".slider").slick({
            dots: false,
            infinite: true,
            speed: 700,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
</script>
