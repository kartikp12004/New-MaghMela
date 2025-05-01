{{-- resources/views/frontend/components/home/featured-packages.blade.php --}}
<section class="py-12">
  <div class="container">
    {{-- सेक्शन का टाइटल --}}
    <div class="text-center mb-8 bg-blue-500">
      <h2 class="display-5 fw-bold"><span class="text-warning">Hindi Tour Guides</span></h2>
    </div>

    {{-- कार्ड ग्रिड --}}
    <div class="row gx-4 gy-5">
      @foreach($featurEvents as $package)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            {{-- ऊपर की इमेज --}}
            <img 
              src="{{ asset($package->image) }}" 
              class="card-img-top" 
              alt="{{ $package->destination }} Image"
            >

            {{-- कार्ड बॉडी --}}
            <div class="card-body d-flex flex-column">
              {{-- Destination नाम --}}
              <h5 class="card-title">{{ $package->destination }}</h5>

              {{-- 2 लाइन तक डिस्क्रिप्शन --}}
              <p class="card-text text-muted flex-grow-1">
                {{ Str::limit($package->description, 100) }}
              </p>

              {{-- Book Now बटन --}}
              <a 
                href="{{ $package->booking_url }}" 
                target="_blank"
                class="btn btn-warning w-100 mt-3"
              >
                Book Now
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
