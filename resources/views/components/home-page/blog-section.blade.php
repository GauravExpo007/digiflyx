<section class=" py-10 text-center">
    <h2 class="text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 my-5 mb-10 xl:mb-16">WHAT'S NEW</h2>
    <div class="relative w-full">
        <!-- Slider Container -->

        <div class="flex space-x-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-hide" id="blogSlider">
            {{-- Blog-1 --}}
            <div
                class="min-w-[300px] snap-center bg-gradient-to-r from-[#2EFDE1] to-[#75AAF8] p-4 rounded-xl shadow-lg animate-slide-in-right">
                <img src="{{ asset('assets/blogs/5-recent-google-updates-for-2024-300x169.webp') }}"
                    alt="Google Updates 2024" class="w-full rounded-lg">
                <h3 class="text-[15px] font-semibold mt-4 mx-auto">Important: 5 Recent Google Updates for 2024</h3>
                <p class="text-sm text-white">September 17, 2024</p>
                <a href="#"
                    class="text-[#E91E63] animate-pulse font-bold mt-2 inline-block hover:border-b-2 border-red-500">Read
                    More »</a>
            </div>

            {{-- Blog-2 --}}
            <div
                class="min-w-[300px] snap-center bg-gradient-to-r from-[#2EFDE1] to-[#75AAF8] p-4 rounded-xl shadow-lg animate-slide-in-right">
                <img src="{{ asset('assets/blogs/seo-success.webp') }}" alt="SEO Tools 2024"
                    class="w-full h-40 rounded-lg">
                <h3 class="text-[15px] font-semibold mt-4 mx-auto">2024 Backlink Strategies: What You Need to Know for
                    SEO Success</h3>
                <p class="text-sm text-white">September 11, 2024</p>
                <a href="#"
                    class="text-[#E91E63] animate-pulse font-bold mt-2 inline-block hover:border-b-2 border-red-500">Read
                    More »</a>
            </div>

            {{-- Blog-3 --}}
            <div
                class="min-w-[300px] snap-center bg-gradient-to-r from-[#2EFDE1] to-[#75AAF8] p-4 rounded-xl shadow-lg">
                <img src="{{ asset('assets/blogs/google-analytics-300x169.webp') }}" alt="Keyword Research"
                    class="w-full rounded-lg">
                <h3 class="text-[15px] font-semibold mt-4 mx-auto">How to Set Up GA4 in Just a Few Minutes:
                    Step-by-Step Tutorial</h3>
                <p class="text-sm text-white">September 9, 2024</p>
                <a href="#"
                    class="text-[#E91E63] animate-pulse font-bold mt-2 inline-block hover:border-b-2 border-red-500">Read
                    More »</a>
            </div>

            {{-- Blog-4 --}}
            <div
                class="min-w-[300px] snap-center bg-gradient-to-r from-[#2EFDE1] to-[#75AAF8] p-4 rounded-xl shadow-lg">
                <img src="{{ asset('assets/blogs/search-console-300x169.webp') }}" alt="Google Updates 2024"
                    class="w-full rounded-lg">
                <h3 class="text-[15px] font-semibold mt-4 mx-auto">Configure Google Search Console in Minutes –
                    Complete Setup Guide</h3>
                <p class="text-sm text-white">September 5, 2024</p>
                <a href="#"
                    class="text-[#E91E63] animate-pulse font-bold mt-2 inline-block hover:border-b-2 border-red-500">Read
                    More »</a>
            </div>

            {{-- Blog-5 --}}
            <div
                class="min-w-[300px] snap-center bg-gradient-to-r from-[#2EFDE1] to-[#75AAF8] p-4 rounded-xl shadow-lg animate-slide-in-left">
                <img src="{{ asset('assets/blogs/Top-10-SEO-Tools.webp') }}" alt="SEO Tools 2024"
                    class="w-full rounded-lg">
                <h3 class="text-[15px] font-semibold mt-4 mx-auto">Top 10 SEO Tools You Need in 2024 – Ultimate List
                </h3>
                <p class="text-sm text-white">September 3, 2024</p>
                <a href="#"
                    class="text-[#E91E63] animate-pulse font-bold mt-2 inline-block hover:border-b-2 border-red-500">Read
                    More »</a>
            </div>

            {{-- Blog-6 --}}
            <div
                class="min-w-[300px] snap-center bg-gradient-to-r from-[#2EFDE1] to-[#75AAF8] p-4 rounded-xl shadow-lg animate-slide-in-left">
                <img src="{{ asset('assets/blogs/keyword-research.webp') }}" alt="Keyword Research"
                    class="w-full rounded-lg">
                <h3 class="text-[15px] font-semibold mt-4 mx-auto">How to Do the Best Keyword Research for Organic &
                    Paid Campaigns</h3>
                <p class="text-sm text-white">August 30, 2024</p>
                <a href="#"
                    class="text-[#E91E63] animate-pulse font-bold mt-2 inline-block hover:border-b-2 border-red-500">Read
                    More »</a>
            </div>
        </div>
        <!-- Navigation Buttons -->
        <button id="prev"
            class="absolute left-0 top-3/4 transform -translate-y-1/2 bg-gray-900 text-white p-3 rounded-full shadow-lg">
            ‹
        </button>
        <button id="next"
            class="absolute right-0 top-3/4 transform -translate-y-1/2 bg-gray-900 text-white p-3 rounded-full shadow-lg">
            ›
        </button>
    </div>
</section>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    #blogSlider {
        scroll-behavior: smooth;
        display: flex;
        overflow-x: auto;
        /* white-space: nowrap; */
        padding: 10px;

    }

    #blogSlider::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.getElementById('blogSlider');
        const next = document.getElementById('next');
        const prev = document.getElementById('prev');
        let autoScroll;

        function scrollNext() {
            slider.scrollBy({
                left: 320,
                behavior: 'smooth'
            });
        }

        function scrollPrev() {
            slider.scrollBy({
                left: -320,
                behavior: 'smooth'
            });
        }

        function startAutoScroll() {
            autoScroll = setInterval(scrollNext, 3000);
            infinite: true;
            autoplay: true;
        }

        function stopAutoScroll() {
            clearInterval(autoScroll);
        }

        // Button click event listeners
        next.addEventListener('click', () => {
            scrollNext();
            stopAutoScroll();
            startAutoScroll();
        });

        prev.addEventListener('click', () => {
            scrollPrev();
            stopAutoScroll();
            startAutoScroll();
        });

        // Start auto-scroll when page loads
        startAutoScroll();
    });
</script>
