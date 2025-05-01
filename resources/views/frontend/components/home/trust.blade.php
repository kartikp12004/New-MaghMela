@php
    // (You can also move this array into your controller and pass it in)
    $reviews = [
        [
            'name'        => 'Priyanshu',
            'rating'      => 5,
            'time'        => 'Jan, 2025',
            'description' => 'यह मेरी जिंदगी का सबसे यादगार अनुभव था। संगम स्नान और गाइडेड टूर ने हमारी यात्रा को बहुत आसान बना दिया। लोकल गाइड की जानकारी और व्यवस्था शानदार थी। Definitely recommend it to everyone visiting Kumbh Mela!',
        ],
        [
            'name'        => 'Rahul Sharma',
            'rating'      => 4,
            'time'        => 'Jan, 2025',
            'description' => 'Kumbh ke baare mein jo suna tha, yaha aake wo sach laga. Package me jo hotel aur transportation diya gaya tha wo kaafi convenient tha. Thoda booking process aur smooth ho sakta hai, lekin overall experience amazing tha!',
        ],
        [
            'name'        => 'Emily Brown',
            'rating'      => 5,
            'time'        => 'Feb, 2025',
            'description' => 'Absolutely phenomenal experience! The guided Sangam Snan was spiritual and well-organized. The team made sure we felt safe and comfortable throughout. I\'ll cherish these memories forever. Thank you for such a soulful journey!',
        ],
        [
            'name'        => 'Vikrant Verma',
            'rating'      => 4.5,
            'time'        => 'Jan, 2025',
            'description' => 'Prayagraj ke har kone ki jaankari aur famous street foods ke baare mein jo guide ne bataya, wo sabse best part tha. Hume laga ki hum local experience kar rahe hain. Truly authentic aur heartfelt service. 10/10 recommend karunga.',
        ],
        [
            'name'        => 'Nandini Mishra',
            'rating'      => 5,
            'time'        => 'Feb, 2025',
            'description' => 'हमने कुंभ मेले के लिए इनका टूर पैकेज बुक किया था। हर चीज़ इतनी अच्छे से मैनेज की गई थी, चाहे वो गंगा स्नान हो, होटल की व्यवस्था हो या यात्रा। मेरी फैमिली को ये एक्सपीरियंस बहुत पसंद आया। धन्यवाद!',
        ],
        [
            'name'        => 'John Carter',
            'rating'      => 4,
            'time'        => 'Jan, 2025',
            'description' => 'The tour was good overall. The team was knowledgeable and friendly, but I wish there was more flexibility in the itinerary. Still, a very well-planned experience for such a massive event!',
        ],
    ];
@endphp

<section class="w-full mx-auto my-8 bg-[#FFD92E] rounded-2xl shadow-lg p-10">
  {{-- Section Header --}}
  <h2 class="text-3xl font-bold text-center text-black">
    Trusted by 500+ Devotees (2025 Kumbh Mela)
  </h2>

  {{-- Review Cards --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-6">
    @foreach($reviews as $review)
      <article class="bg-[#F4F2E9] p-4 rounded-lg shadow-lg flex flex-col items-center hover:shadow-xl transition-shadow">
        <blockquote class="mt-2 text-sm md:text-base text-gray-700 italic text-center">
          “{{ $review['description'] }}”
        </blockquote>

        {{-- Simple star display --}}
        <p class="mt-2">
          @for($i = 1; $i <= floor($review['rating']); $i++)
            <span class="inline-block text-yellow-500 text-lg">★</span>
          @endfor
          @if($review['rating'] - floor($review['rating']) >= 0.5)
            <span class="inline-block text-yellow-500 text-lg">☆</span>
          @endif
        </p>

        <p class="text-sm md:text-base font-bold text-black mt-2">
          ~ {{ $review['name'] }}
        </p>
        <p class="text-xs md:text-xs italic text-black">
          ({{ $review['time'] }})
        </p>
      </article>
    @endforeach
  </div>
</section>
