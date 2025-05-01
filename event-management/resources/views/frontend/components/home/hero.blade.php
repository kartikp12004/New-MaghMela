{{-- resources/views/frontend/components/home/hero.blade.php --}}
<section 
  class="relative w-full h-screen bg-cover bg-center -mt-20" 
  style="background-image: url('https://images.unsplash.com/photo-1716573260891-23ad993e8833?q=80&w=3131&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')"
>
  {{-- dark overlay --}}
  <div class="absolute inset-0 bg-black bg-opacity-60"></div>

  {{-- content wrapper --}}
  <div class="relative z-10 flex flex-col justify-center items-start h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Tagline --}}
    <span class="inline-block bg-[#FFD92E] text-white font-semibold rounded-full px-4 py-1 mb-4">
      Spiritual Pilgrimage Tours
    </span>

    {{-- Main Headline --}}
    <h1 class="text-white text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
      Discover the Heart of Varanasi &amp; Prayagraj
    </h1>

    {{-- Sub-heading --}}
    <p class="mt-4 text-gray-200 text-lg sm:text-xl lg:text-2xl max-w-2xl">
      Join our expert-guided tours through Varanasi, Ayodhya, Prayagraj &amp; Chitrakoot. 
      Immerse yourself in age-old rituals, sacred ghats, and unforgettable cultural experiences.
    </p>

    {{-- Call to Action Buttons --}}
    <div class="mt-8 flex flex-col sm:flex-row gap-4">
      <a 
        href="{{ route('enquiry.show') }}" 
        class="inline-block bg-[#FFD92E] hover:bg-orange-400 text-white font-semibold px-6 py-3 rounded-lg transition"
      >
        Enquire Now
      </a>
      <a 
        href="{{ route('firm-enquiry.create') }}" 
        class="inline-block bg-white hover:bg-gray-100 text-gray-900 font-semibold px-6 py-3 rounded-lg transition"
      >
        Partner With Us
      </a>
    </div>

    {{-- Highlights --}}
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6 text-gray-200">
      <div class="flex items-center space-x-2">
        <i class="fas fa-users text-2xl text-orange-400"></i>
        <span class="font-medium">1000+ Devotees Served</span>
      </div>
      <div class="flex items-center space-x-2">
        <i class="fas fa-map-marker-alt text-2xl text-orange-400"></i>
        <span class="font-medium">4 Pilgrimage Destinations</span>
      </div>
      <div class="flex items-center space-x-2">
        <i class="fas fa-star text-2xl text-orange-400"></i>
        <span class="font-medium">5-Star Local Guides</span>
      </div>
    </div>
  </div>
</section>
