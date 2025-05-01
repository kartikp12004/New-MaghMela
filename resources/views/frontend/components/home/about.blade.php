<section
  class="w-full bg-[#F4F2E9] mx-auto my-8 rounded-2xl grid grid-cols-1 md:grid-cols-2 shadow-lg"
  aria-labelledby="main-title"
>
  <!-- Main Image -->
  <figure>
    <img
      src="{{ asset('frontend/img/a1.webp') }}"
      alt="Magh Mela Prayagraj"
      class="w-full rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none h-full object-cover"
    />
  </figure>

  <!-- Main Content -->
  <article class="p-6 flex flex-col justify-center">
    <h1
      id="main-title"
      class="text-3xl font-bold text-center text-[#F49330] mb-4"
    >
      MAGH MELA PRAYAGRAJ
    </h1>

    <p class="text-justify mb-4 leading-relaxed text-gray-700">
      Magh Mela is an annual spiritual festival held every January–February (the Hindu month of Magh) at the sacred <strong>Triveni Sangam</strong> in Prayagraj. Millions of devotees, saints, and pilgrims gather for the holy dip in the confluence of the Ganga, Yamuna, and the mythical Saraswati to cleanse their sins and seek blessings.
    </p>

    <p class="text-justify mb-6 leading-relaxed text-gray-700">
      Over 30 days of vibrant processions, devotional gatherings, and sacred rituals create a charged atmosphere of faith and unity. With cultural performances, religious discourses, and community feasts, Magh Mela showcases India’s living heritage and collective devotion.
    </p>

    <!-- Icon Section -->
    <div class="flex flex-col xl:flex-row justify-center gap-6 mt-4">
      <!-- Shahi Snan -->
      <div class="flex items-center space-x-3" aria-labelledby="shahi-snan-title">
        <img
          src="{{ asset('frontend/img/icon1.webp') }}"
          alt="Shahi Snan dates icon"
          class="w-12 h-12 flex-shrink-0"
        />
        <p id="shahi-snan-title" class="text-xs text-gray-800">
          <strong>Key Bathing Dates of Magh Mela</strong>
        </p>
      </div>

      <!-- Divider -->
      <div class="h-12 border-l-2 border-gray-400 hidden xl:block"></div>

      <!-- Top Attractions -->
      <div class="flex items-center space-x-3" aria-labelledby="top-attractions-title">
        <img
          src="{{ asset('frontend/img/icon2.webp') }}"
          alt="Top attractions icon"
          class="w-12 h-12 flex-shrink-0"
        />
        <p id="top-attractions-title" class="text-xs text-gray-800">
          <strong>Top Sights &amp; Rituals</strong>
        </p>
      </div>

      <!-- Divider -->
      <div class="h-12 border-l-2 border-gray-400 hidden xl:block"></div>

      <!-- Accommodation -->
      <div class="flex items-center space-x-3" aria-labelledby="accommodation-title">
        <img
          src="{{ asset('frontend/img/icon3.png') }}"
          alt="Accommodation options icon"
          class="w-12 h-12 flex-shrink-0"
        />
        <p id="accommodation-title" class="text-xs text-gray-800">
          <strong>Stay &amp; Transport</strong>
        </p>
      </div>
    </div>
  </article>
</section>



