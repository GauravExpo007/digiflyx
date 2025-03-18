<section id="counter-section">
    <div class="flex flex-col md:flex-row justify-center items-center p-5 md:p-10 pb-0 md:pb-0">
        {{-- 1st-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/3 group">
            <div
                class=" shadow-lg shadow-black rounded-tr-4xl rounded-bl-4xl p-3 bg-gradient-to-b from-[#FEEFFF] via-[#BC91ED] to-[#E4C0E6] ">
                <img src="{{ asset('assets/services/startup.svg') }}" alt="startup" class="h-20  md:h-16" />
            </div>
            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter  md:text-3xl text-2xl font-bold font-sans" data-target="10">
                    </div>
                    <span class="md:text-3xl text-2xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Year In Business</span>
            </div>
        </div>

        {{-- 2nd-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/3 group">
            <div
                class=" shadow-lg shadow-black rounded-tr-4xl rounded-bl-4xl p-3 bg-gradient-to-b from-[#FEEFFF] via-[#BC91ED] to-[#E4C0E6] ">
                <img src="{{ asset('assets/services/team.svg') }}" alt="team" class="h-20  md:h-16" />
            </div>
            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter  md:text-3xl text-2xl font-bold font-sans" data-target="30">
                    </div>
                    <span class="md:text-3xl text-2xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Team Members</span>
            </div>
        </div>

    </div>

    <div class="flex flex-col md:flex-row justify-center items-center p-5 md:p-10 pt-0">
        {{-- 3rd-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group">
            <div
                class=" shadow-lg shadow-black rounded-tr-4xl rounded-bl-4xl p-3 bg-gradient-to-b from-[#FEEFFF] via-[#BC91ED] to-[#E4C0E6] ">
                <img src="{{ asset('assets/services/deal.svg') }}" alt="deal" class="h-20  md:h-16" />
            </div>
            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter  md:text-3xl text-2xl font-bold font-sans" data-target="450">
                    </div>
                    <span class="md:text-3xl text-2xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Happy Clients</span>
            </div>
        </div>

        {{-- 4th-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group">
            <div
                class=" shadow-lg shadow-black rounded-tr-4xl rounded-bl-4xl p-3 bg-gradient-to-b from-[#FEEFFF] via-[#BC91ED] to-[#E4C0E6] ">
                <img src="{{ asset('assets/services/computers.svg') }}" alt="team" class="h-20  md:h-16" />
            </div>
            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter  md:text-3xl text-2xl font-bold font-sans" data-target="1000">
                    </div>
                    <span class="md:text-3xl text-2xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Project Done</span>
            </div>
        </div>

        {{-- 5th-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group">
            <div
                class=" shadow-lg shadow-black rounded-tr-4xl rounded-bl-4xl p-3 bg-gradient-to-b from-[#FEEFFF] via-[#BC91ED] to-[#E4C0E6] ">
                <img src="{{ asset('assets/services/worker.svg') }}" alt="team" class="h-20  md:h-16" />
            </div>
            <div class="flex flex-col justify-center text-center">
                <div class="flex justify-center items-center py-3">
                    <div class="counter  md:text-3xl text-2xl font-bold font-sans" data-target="95K">
                    </div>
                    <span class="md:text-3xl text-2xl  font-bold">+</span>
                </div>
                <span class="text-base md:text-lg ">Hours Worked</span>
            </div>
        </div>

        {{-- 6th-counter --}}
        <div
            class="flex justify-around md:justify-center md:gap-5 hover:scale-95 duration-500 py-6 backdrop-blur-lg w-full md:w-1/4 group">
            <div
                class=" shadow-lg shadow-black rounded-tr-4xl rounded-bl-4xl p-3 bg-gradient-to-b from-[#FEEFFF] via-[#BC91ED] to-[#E4C0E6] ">
                <img src="{{ asset('assets/services/customer-service.svg') }}" alt="team" class="h-20  md:h-16" />
            </div>
            <div class="flex flex-col justify-center text-center">
                <div class="flex flex-col justify-center items-center py-3 pb-0">
                    <div class="counter  md:text-3xl text-2xl font-bold font-sans" data-target="9AM / 5PM">
                    </div>
                    <span class="text-sm md:text-base ">(Mon-Fri)</span>
                    {{-- <span class="md:text-3xl text-xl  font-bold">+</span> --}}
                </div>
                <span class="text-base md:text-lg ">Support Available</span>
            </div>
        </div>

    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const animateCounters = () => {
            document.querySelectorAll('.counter').forEach(counter => {
                let targetText = counter.getAttribute('data-target');

                // Handle "K" values and convert them to numbers
                let target;
                if (targetText.includes("K")) {
                    target = parseFloat(targetText.replace("K", "")) * 1000;
                } else if (targetText.includes("/")) {
                    // If the value is "24/7", display it directly without animation
                    counter.textContent = targetText;
                    return;
                } else {
                    target = parseInt(targetText);
                }

                if (isNaN(target)) return; // Skip if not a valid number

                let current = 0;
                const increment = target / 100;

                const update = () => {
                    if (current < target) {
                        current += increment;
                        if (current >= 1000) {
                            counter.textContent = (current / 1000).toFixed(1).replace(".0",
                                "") + "K";
                        } else {
                            counter.textContent = Math.ceil(current);
                        }
                        setTimeout(update, 20);
                    } else {
                        counter.textContent = target >= 1000 ? (target / 1000).toFixed(1)
                            .replace(".0", "") + "K" : target;
                    }
                };
                update();
            });
        };

        const isVisible = () => {
            const section = document.getElementById('counter-section');
            const rect = section.getBoundingClientRect();
            return rect.top < window.innerHeight && rect.bottom >= 0;
        };

        if (isVisible()) animateCounters();

        window.addEventListener('scroll', function onScroll() {
            if (isVisible()) {
                animateCounters();
                window.removeEventListener('scroll', onScroll);
            }
        });
    });
</script>
