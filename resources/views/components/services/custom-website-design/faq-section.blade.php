<div class="bg-gradient-to-b from-[#c9ede7] to-[#edbebe]  flex items-center">
    <div class="w-full max-w-4xl p-6 md:p-10 lg:p-16">
        <h2
            class="bg-gradient-to-r from-[#340446] to-[#f31054] bg-clip-text text-transparent text-lg md:text-xl uppercase">
            frequently asked questions
        </h2>
        <h3 class=" md:w-[90%] text-3xl md:text-4xl font-semibold text-left py-5 md:pb-10">
            Examine the<span class="text-[#E91E63] animate-pulse">FAQ Section</span>
            to improve your SEO Understanding
        </h3>
        <div class="space-y-4 animate-right">
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(0)">
                    What is SEO?
                </button>
                <p class=" pb-3">SEO (Search Engine Optimization) is the process of improving a website’s
                    visibility and ranking in search engine results pages through various strategies and techniques,
                    aiming to drive organic (non-paid) traffic.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(1)">
                    Why is SEO important for digital marketing?
                </button>
                <p class="hidden  pb-3">SEO is essential in digital marketing as it helps businesses
                    increase their online visibility, attract organic traffic, and improve brand credibility, ultimately
                    leading to better conversions.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(2)">
                    What are keywords in SEO?
                </button>
                <p class="hidden  pb-3">Keywords are specific words or phrases that users enter into search
                    engines to find relevant content. They are crucial in SEO as they help websites rank for search
                    queries.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(3)">
                    How does On-page optimization impact SEO?
                </button>
                <p class="hidden  pb-3">On-page optimization refers to measures taken directly on a website
                    to improve its search rankings, such as optimizing meta tags, content, and images.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(4)">
                    What is link building in SEO?
                </button>
                <p class="hidden  pb-3">Link building is the process of acquiring hyperlinks from other
                    websites to your own, helping improve search engine rankings and domain authority.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(5)">
                    What is the difference between organic and paid search results?
                </button>
                <p class="hidden  pb-3">Organic search results are unpaid listings ranked based on SEO
                    efforts, while paid search results appear as advertisements and require payment per click.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(6)">
                    How does mobile optimization impact SEO?
                </button>
                <p class="hidden  pb-3">Mobile optimization ensures a website is responsive and
                    user-friendly on mobile devices, which improves user experience and boosts rankings on search
                    engines like Google.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(7)">
                    What is local SEO?
                </button>
                <p class="hidden  pb-3">Local SEO focuses on optimizing a business's online presence to
                    attract more customers from relevant local searches on Google and other search engines.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(8)">
                    How does SEO relate to content marketing?
                </button>
                <p class="hidden  pb-3">SEO and content marketing work together; high-quality content
                    optimized with relevant keywords improves search rankings and drives organic traffic.</p>
            </div>
            <div class="faq-item border-b border-gray-700">
                <button class="w-full text-left py-3 text-[#E91E63] animate-pulse font-semibold" onclick="toggleFAQ(9)">
                    How long does it take to see results from SEO efforts?
                </button>
                <p class="hidden  pb-3">SEO results typically take 3-6 months to become noticeable,
                    depending on competition, website age, and the effectiveness of implemented strategies.</p>
            </div>
        </div>
    </div>

    <script>
        let activeIndex = 0;
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".faq-item p")[0].classList.remove("hidden");
        });

        function toggleFAQ(index) {
            const allAnswers = document.querySelectorAll('.faq-item p');
            allAnswers.forEach((answer, i) => {
                if (i === index) {
                    answer.classList.remove('hidden');
                } else {
                    answer.classList.add('hidden');
                }
            });
            activeIndex = index;
        }
    </script>
</div>
