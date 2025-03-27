  <!-- Left Side: Form -->
  <div class="flex-1">
      <h2 class="text-[#E91E63] animate-pulse text-lg md:text-xl py-4">Contact Now</h2>
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Have Questions? Write a Message</h2>
      <p class="text-gray-600 mb-6">We will get back to you as soon as possible.</p>
      <form>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <input type="text" placeholder="Enter name"
                  class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
              <input type="email" placeholder="Enter email"
                  class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
              <input type="tel" placeholder="Enter mobile"
                  class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
              <select class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
                  <option value="">Select Requirement</option>
                  <option value="Web Development">Web Development</option>
                  <option value="Graphic Designing">Graphic Designing</option>
                  <option value="Video Editing">Video Editing</option>
                  <option value="Seo">SEO</option>
                  <option value="Smm">SMM</option>
                  <option value="Email-Marketing">Email-Marketing</option>
                  <option value="Ppc">PPC</option>
              </select>
          </div>
          <textarea placeholder="Enter your message" class="w-full mt-4 p-3 border rounded-lg focus:ring-2 focus:ring-pink-400"
              rows="4" required></textarea>
          <button type="submit"
              class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-lg w-full mt-4">Submit</button>
      </form>
  </div>

  <!-- Right Side: Contact Info -->
  <div class="flex-1 space-y-4 md:space-y-10 md:pt-10">
      <div class="p-4 bg-[#FFF8F2] rounded-lg shadow-md animate-right">
          <p class="font-semibold text-lg">📞 Phone:</p>
          <p class="text-gray-700">Monday – Friday, 9 am to 5 pm</p>
          <a href="tel:+17026050607" class="font-bold text-[#E91E63]">+1(702) 605-0607</a>
      </div>
      <div class="p-4 bg-[#FFECEC] rounded-lg shadow-md animate-left">
          <p class="font-semibold text-lg">📧 Email:</p>
          <p class="text-gray-700">We respond within 24 hours.</p>
          <a href="mailto:info@digitalfyx.com" class="font-bold text-[#E91E63]">info@digitalfyx.com</a>
      </div>
      <div class="p-4 bg-[#EAFFFD] rounded-lg shadow-md animate-right">
          <p class="font-semibold text-lg">📍 Address:</p>
          <p class="text-gray-700">Monday – Friday, 9 am to 5 pm</p>
          <p class="font-bold text-[#E91E63]">401, Ryland St. Ste 200-A Reno NV 89502, USA</p>
      </div>
  </div>
