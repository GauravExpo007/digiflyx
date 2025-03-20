<div class="w-full flex flex-col justify-center items-center mx-auto gap-5 md:gap-10 lg:gap-20 py-10 md:py-20 bg-center md:bg-right bg-no-repeat bg-cover"
    style="background-image: url('../assets/bg/tt-work-bg.webp')">
    <!-- About Company Overview -->
    <div class="flex flex-col md:flex-row items-center gap-6 md:w-[90%]">
        <!-- Content Section -->
        <div class="flex flex-col gap-5 p-5 w-full md:w-3/5">
            <h2 class="bg-gradient-to-r from-[#340446] to-[#f31054] bg-clip-text text-transparent text-lg md:text-xl">
                OUR VISION
            </h2>
            <h3 class="text-3xl md:text-4xl font-semibold text-left">
                Get Visible Results with our Unparalleled <span class="text-[#E91E63] animate-pulse">SEO Expertise</span>
            </h3>

            <!-- Tabs -->
            <div class="flex space-x-5 border-b-2 border-gray-300 pb-2">
                <button id="experienceTab"
                    class="tab-button text-lg md:text-xl font-semibold text-gray-700 border-b-4 border-transparent hover:border-[#E91E63] transition-all duration-300 active">
                    Years of Experience
                </button>
                <button id="seoTab"
                    class="tab-button text-lg md:text-xl font-semibold text-gray-700 border-b-4 border-transparent hover:border-[#E91E63] transition-all duration-300">
                    Dedicated SEO Professionals
                </button>
            </div>

            <!-- Content Sections -->
            <div id="experienceContent" class="tab-content transition-opacity duration-500 ease-in-out opacity-100">
                <h3 class="text-3xl md:text-4xl font-semibold text-left">
                    <span class="text-[#E91E63]">Years of Experience</span>
                </h3>
                <p class="text-justify leading-8 text-slate-700 text-lg animate-left">
                    With over 10 years of expertise, Digitalfyx has been instrumental in facilitating the growth of
                    businesses across various sectors by enhancing their online visibility and generating increased
                    revenue.
                    We possess a wealth of experience catering to companies of all sizes and aim to boost their online
                    traffic and expand their customer base.
                    Our team of SEO experts comprises industry veterans with over a decade of leadership experience.
                    We foster a culture of collaboration, ensuring that whenever an issue arises, our entire team
                    proactively comes together to address it.
                </p>
            </div>

            <div id="seoContent" class="tab-content transition-opacity duration-500 ease-in-out opacity-0 hidden">
                <h3 class="text-3xl md:text-4xl font-semibold text-left">
                    <span class="text-[#E91E63]">Dedicated SEO Professionals</span>
                </h3>
                <p class="text-justify leading-8 text-slate-700 text-lg animate-right">
                    At Digitalfyx, we recognize the importance of simplifying the complex and often daunting search
                    engine optimization (SEO) process for our clients.
                    Our primary objective is to ensure this technical realm becomes easily understandable and
                    manageable.
                    To achieve this, we assign each client a dedicated point of contact who supervises their project
                    from start to finish.
                    This approach allows our clients to establish a strong rapport with our designated Digitalfyx SEO
                    professional.
                    We intimately familiarize ourselves with your business and comprehend your requirements.
                    By fostering this close partnership, we guarantee a tailored and effective SEO strategy that aligns
                    with your unique needs.
                </p>
            </div>
        </div>

        <!-- Image Section -->
        <img src="../assets/seo/seo-2.png" alt="SEO Strategy"
            class="w-full md:w-2/5 rounded-lg p-5 m-5 hover:scale-105 duration-500 animate-right" />
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const experienceTab = document.getElementById("experienceTab");
        const seoTab = document.getElementById("seoTab");
        const experienceContent = document.getElementById("experienceContent");
        const seoContent = document.getElementById("seoContent");

        function switchTab(activeTab, inactiveTab, activeContent, inactiveContent) {
            activeTab.classList.add("border-[#E91E63]");
            inactiveTab.classList.remove("border-[#E91E63]");

            // Add fade-in effect
            inactiveContent.classList.add("opacity-0");
            inactiveContent.classList.add("hidden");
            activeContent.classList.remove("hidden");
            setTimeout(() => {
                activeContent.classList.remove("opacity-0");
                activeContent.classList.add("opacity-100");
            }, 50);
        }

        experienceTab.addEventListener("click", function() {
            switchTab(experienceTab, seoTab, experienceContent, seoContent);
        });

        seoTab.addEventListener("click", function() {
            switchTab(seoTab, experienceTab, seoContent, experienceContent);
        });
    });
</script>
