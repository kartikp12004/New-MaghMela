{{-- resources/views/frontend/components/home/recent-packages.blade.php --}}
<section class="py-12">
  <div class="container">
    {{-- सेक्शन हेडर --}}
    <div class="text-center mb-8">
      <h2 class="display-5 fw-bold">
        <span class="text-primary">English Tour Guides</span>
      </h2>
    </div>

    {{-- कार्ड ग्रिड --}}
    <div class="row g-4">
      @foreach($recentEvents as $package)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0 d-flex flex-column">
            {{-- इमेज टॉप --}}
            <img 
              src="{{ asset($package->image) }}" 
              class="card-img-top" 
              alt="{{ $package->destination }} Image"
            >

            {{-- कार्ड बॉडी --}}
            <div class="card-body flex-grow-1">
              <h5 class="card-title">{{ $package->destination }}</h5>
              <p class="card-text text-muted">
                {{ Str::limit($package->description, 100) }}
              </p>
            </div>

            {{-- बुक नाउ बटन फूटेर में --}}
            <div class="card-footer bg-transparent border-0">
              <a 
                href="{{ $package->booking_url }}" 
                target="_blank"
                class="btn btn-warning w-100"
              >
                Book Now
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- पेजिनेशन --}}
    <div class="mt-6 d-flex justify-content-center">
      {{ $recentEvents->links() }}
    </div>
  </div>
</section>
