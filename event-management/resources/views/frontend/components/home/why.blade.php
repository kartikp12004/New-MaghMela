{{-- resources/views/frontend/components/home/why-choose-us.blade.php --}}
@php
    $features = [
        ['title'=>'Local Expertise',
         'description'=>'Born and raised in Prayagraj, our deep understanding of the city’s culture and hidden gems ensures you get an authentic experience.'],
        ['title'=>'Unique Experiences',
         'description'=>'Explore beyond the ordinary with our curated tours that include iconic landmarks, vibrant street food, and cultural immersion.'],
        ['title'=>'Personalized Tours',
         'description'=>'Every trip is tailored to meet your preferences, ensuring a journey that aligns with your interests and comfort.'],
        ['title'=>'Trusted Guides',
         'description'=>'Our experienced and friendly guides provide valuable insights and ensure your journey is safe and enriching.'],
        ['title'=>'Comfort & Convenience',
         'description'=>'With well-planned itineraries, reliable transport, and premium accommodations, we make your journey hassle-free.'],
        ['title'=>'Cultural Immersion',
         'description'=>'Participate in rituals, witness traditions, and connect with the spiritual essence of Prayagraj like never before.'],
        ['title'=>'Affordable Packages',
         'description'=>'We offer a range of budget-friendly and premium packages designed to meet all your travel needs.'],
        ['title'=>'Exceptional Support',
         'description'=>'Our 24/7 customer support ensures you always have someone to assist you throughout your journey.'],
    ];
@endphp

<section class="w-full mx-auto my-8 bg-[#FFD92E] rounded-2xl shadow-lg p-6">
  {{-- Section Header --}}
  <header class="text-center">
    <h2 class="text-3xl font-bold text-black">Why Choose Us?</h2>
    <p class="text-sm md:text-lg text-gray-800 mt-2">
      Discover why we are the best choice for an unforgettable Prayagraj Magh Mela experience.
    </p>
  </header>

  {{-- Feature Grid --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
    @foreach($features as $feature)
      <div class="bg-[#F4F2E9] p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
        <h3 class="text-lg font-bold text-black text-center">{{ $feature['title'] }}</h3>
        <p class="mt-2 text-sm md:text-base text-justify text-gray-700">
          {{ $feature['description'] }}
        </p>
      </div>
    @endforeach
  </div>

  {{-- Promise Section --}}
  <div class="text-center text-lg md:text-xl font-semibold mt-8 text-black">
    *We promise a journey filled with memories, spiritual enrichment, and unique experiences. Let us make your trip extraordinary!
  </div>
</section>
