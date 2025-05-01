{{-- resources/views/frontend/components/home/hero.blade.php --}}
<div class="bg-gray-100 ">
  <!-- Background Image Section -->
  <div
    class="relative bg-cover bg-center bg-no-repeat py-20 h-fit"
    style="background-image: url('https://images.unsplash.com/photo-1662720868850-e60cefb03201?q=80&w=2946&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fA%3D%3D');"
  >
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Content Section -->
    <div class="relative flex items-center justify-center lg:justify-between h-full px-4 lg:px-16">

      <!-- Left Pooja Names (Desktop Only) -->
      <div class="hidden lg:block bg-[#FFD92E] rounded-2xl text-center text-base font-semibold">
        <img
          src="https://images.unsplash.com/photo-1606293926075-69a00dbfde81?q=80&w=2333&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fA%3D%3D"
          alt="Pooja Services in Prayagraj kumbh mela 2025"
          class="rounded-t-2xl shadow-lg w-40 md:w-48 lg:w-56"
        />
        <div class="p-4">
          <h3 class="text-xl font-extrabold">Popular Rituals</h3>
          <ul>
            <li>Gau Daan</li>
            <li>Pind Daan</li>
            <li>Rudra Abhishek</li>
            <li>Maanglik Dosh Shanti</li>
          </ul>
        </div>
      </div>

      <!-- Center Main Section -->
      <div class="flex flex-col w-[80%] lg:w-[45%]">
        <div class="bg-[#FFD92E] text-center rounded-xl shadow-lg px-6 py-8">
          <a
            href="https://www.prayagrajkumbhmela.com/"
            class="text-lg sm:text-xl font-bold text-gray-800"
          >
            prayagrajkumbhmela.com
          </a>
          <h1 class="mt-2 text-lg sm:text-3xl font-extrabold">
            Book Any Pooja Service For You
          </h1>
          <p class="mt-2 text-sm md:text-base font-semibold">
            Experience divine rituals performed by experienced Tirth Purohits.
            We will take care of all arrangements—just call us or fill the enquiry form.
          </p>

          <a
            href="{{ route('enquiry.show') }}"
            class="inline-block bg-white font-semibold py-2 px-4 mt-4 rounded-2xl shadow hover:bg-orange-100"
          >
            Enquire Now →
          </a>
        </div>

        <!-- Statistics Section -->
        <div class="grid grid-cols-2 gap-2 lg:gap-6 text-center px-2 py-6 sm:px-10 bg-[#FFD92E] rounded-xl mt-6">
          <div class="flex flex-col items-center">
            <p class="text-lg sm:text-3xl font-extrabold">100+</p>
            <p class="text-sm font-semibold">Verified and experienced priests</p>
          </div>
          <div class="flex flex-col items-center">
            <p class="text-lg sm:text-3xl font-extrabold">1000+</p>
            <p class="text-sm font-semibold">Poojas conducted in 2025 Kumbh Mela</p>
          </div>
        </div>
      </div>

      <!-- Right Pooja Names (Desktop Only) -->
      <div class="hidden lg:block bg-[#FFD92E] rounded-2xl text-center text-base font-semibold">
        <img
          src="https://images.unsplash.com/photo-1606293926075-69a00dbfde81?q=80&w=2333&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fA%3D%3D"
          alt="Pooja Services in Prayagraj kumbh mela 2025"
          class="rounded-t-2xl shadow-lg w-40 md:w-48 lg:w-56"
        />
        <div class="p-4">
          <h3 class="text-xl font-extrabold">Common Services</h3>
          <ul>
            <li>Grah Shanti</li>
            <li>Navgraha Pooja</li>
            <li>Brahmin Bhojan</li>
            <li>Asthi Visarjan</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
