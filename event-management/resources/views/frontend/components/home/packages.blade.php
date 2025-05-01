{{-- resources/views/frontend/components/home/packages.blade.php --}}
<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

    {{-- Hindi Tour Guides --}}
    <h2 class="text-center mb-12">
      <span class="inline-block bg-[#FFD92E] text-gray-900 uppercase font-extrabold px-6 py-2 rounded-full">
        Hindi Tour Guides
      </span>
    </h2>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-16">
      @foreach($featurEvents as $package)
        <div class="group bg-white rounded-xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 flex flex-col">
          {{-- Image --}}
          <div class="h-48 overflow-hidden">
            <img 
              src="{{ asset($package->image) }}" 
              alt="{{ $package->destination }}" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            >
          </div>
          {{-- Body --}}
          <div class="p-6 flex flex-col flex-grow">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">
              {{ $package->title }}
            </h3>
            <p class="text-gray-600 flex-grow mb-6">
              {{ Str::limit($package->description, 100) }}
            </p>
            <a 
              href="https://pages.razorpay.com/pl_QOIcbQnmWt24m6/view"
              target="_blank"
              class="mt-auto block w-32 text-center bg-gradient-to-r from-yellow-400 to-yellow-500 text-white font-semibold py-2 rounded-full shadow-lg hover:opacity-90 transform hover:scale-105 transition"
            >
              Book Now
            </a>
          </div>
        </div>
      @endforeach
    </div>

    {{-- Divider --}}
    <div class="border-t border-gray-300 mb-16"></div>

    {{-- English Tour Guides --}}
    <h2 class="text-center mb-12">
      <span class="inline-block bg-[#FFD92E] text-gray-900 uppercase font-extrabold px-6 py-2 rounded-full">
        English Tour Guides
      </span>
    </h2>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($recentEvents as $package)
        <div class="group bg-white rounded-xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105 flex flex-col">
          <div class="h-48 overflow-hidden">
            <img 
              src="{{ asset($package->image) }}" 
              alt="{{ $package->destination }}" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
            >
          </div>
          <div class="p-6 flex flex-col flex-grow">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">
              {{ $package->title }}
            </h3>
            <p class="text-gray-600 flex-grow mb-6">
              {{ Str::limit($package->description, 100) }}
            </p>
            <a 
              href="https://pages.razorpay.com/pl_PCO2e5YUhV8lbe/view"
              target="_blank"
              class="mt-auto block w-32 text-center bg-gradient-to-r from-yellow-400 to-yellow-500 text-white font-semibold py-2 rounded-full shadow-lg hover:opacity-90 transform hover:scale-105 transition"
            >
              Book Now
            </a>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
