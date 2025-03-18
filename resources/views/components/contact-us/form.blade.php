<div class="bg-gray-50 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-5xl bg-white rounded-lg p-8 flex flex-col md:flex-row gap-8">
        <!-- Left Side: Form -->
        <div class="flex-1">
            <h2 class="text-[#E91E63] animate-pulse  text-lg md:text-xl py-4">
                Contact Now
            </h2>
            <h2 class="text-3xl font-bold text-gray-800 mb-4 w-[90%]">Have Question? Write a Message</h2>
            <p class="text-gray-600 mb-6">We will catch you as early as we receive the message</p>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Enter name"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400"
                        required>
                    <input type="email" placeholder="Enter email"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400"
                        required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <input type="tel" id="phone" name="phone" placeholder="Enter mobile"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400"
                        required>
                    <select class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400"
                        required>
                        <option value="">Select Requirement</option>
                        <option value="General Inquiry">Web</option>
                        <option value="Support">Graphic</option>
                        <option value="Feedback">Video</option>
                    </select>
                </div>
                <textarea placeholder="Enter your message"
                    class="w-full mt-4 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400" rows="4"
                    required></textarea>
                <button type="submit"
                    class="bg-gradient-to-r from-[#B454E2] via-[#E4715B] to-[#B454E2] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-lg px-5 py-2 text-base md:text-lg shadow-lg hover:shadow-2xl w-full">Submit</button>
            </form>
        </div>

        <!-- Right Side: Contact Info -->
        <div class="flex-1 space-y-4 md:space-y-10 md:pt-10">
            <div class="p-4 bg-[#FFF8F2] rounded-lg shadow-lg animate-right hover:scale-105 duration-500">
                <p class="font-semibold text-lg">📞 Phone:</p>
                <p class="text-gray-700">Assistance hours: Monday – Friday, 9 am to 5 pm</p>
                <a href="tel:+17026050607" class="font-bold text-[#E91E63] animate-pulse">+1(702) 605-0607</a>
            </div>
            <div class="p-4 bg-[#FFECEC] rounded-lg shadow-lg animate-left hover:scale-105 duration-500">
                <p class="font-semibold text-lg">📧 Email:</p>
                <p class="text-gray-700">Our support team will get back to you within 24 hours.</p>
                <a href="mailto:info@digitalfyx.com" target="_blank" class="font-bold text-[#E91E63] animate-pulse">
                    info@digitalfyx.com
                </a>
            </div>
            <div class="p-4 bg-[#EAFFFD] rounded-lg shadow-lg animate-right  hover:scale-105 duration-500">
                <p class="font-semibold text-lg"> <i class="fa fa-map-marker text-[#54547A]"></i> Address:</p>
                <p class="text-gray-700">We are available, Monday – Friday, 9 am to 5 pm</p>
                <p class="font-bold text-[#E91E63] animate-pulse">401, Ryland St. Ste 200-A Reno NV 89502, USA</p>
            </div>
        </div>
    </div>
</div>
