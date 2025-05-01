{{-- resources/views/frontend/pages/enquiry.blade.php --}}
@extends('layouts.app')


@section('content')
<div class="min-h-screen bg-indigo-100 py-16 px-4">
  <div class="max-w-4xl mx-auto">

    {{-- Intro Hero --}}
    <div class="text-center mb-12">
      <h1 class="text-4xl font-extrabold text-blue-900 mb-4">
        Customize Your Magh Mela Experience
      </h1>
      <p class="text-gray-700 text-lg">
        Welcome! We offer fully tailored tour packages for Magh Mela 2025 in Prayagraj.  
        From guided Sangam dips and cultural walks to comfortable stays and local cuisine tastings,  
        our expert team ensures every detail is perfect.  
        Fill out the form below and we’ll craft your ideal pilgrimage journey.
      </p>
    </div>

    {{-- Form Card --}}
    <div class="bg-blue-100 shadow-xl rounded-2xl overflow-hidden">
      <div class="bg-blue-800 px-6 py-8">
        <h2 class="text-2xl md:text-3xl font-semibold text-white text-center">
          Tour Enquiry Form
        </h2>
      </div>
      <div class="p-8">
        {{-- Success Flash --}}
        @if(session('success'))
          <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg text-center font-medium">
            {{ session('success') }}
          </div>
        @endif

        <form action="{{ route('enquiry.submit') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
          @csrf

          {{-- Name --}}
          <div>
            <label for="name" class="block font-medium mb-1">Name</label>
            <input
              id="name" name="name" type="text" value="{{ old('name') }}" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            />
            @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Email --}}
          <div>
            <label for="email" class="block font-medium mb-1">Email</label>
            <input
              id="email" name="email" type="email" value="{{ old('email') }}" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            />
            @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Phone --}}
          <div>
            <label for="phone" class="block font-medium mb-1">Phone</label>
            <input
              id="phone" name="phone" type="tel" placeholder="+91 1234567890"
              value="{{ old('phone') }}" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            />
            @error('phone')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Country --}}
          <div>
            <label for="country" class="block font-medium mb-1">Country</label>
            <input
              id="country" name="country" type="text" value="{{ old('country') }}" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            />
            @error('country')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Arrival Date --}}
          <div>
            <label for="date" class="block font-medium mb-1">Arrival Date</label>
            <input
              id="date" name="date" type="date" value="{{ old('date') }}" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            />
            @error('date')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Duration --}}
          <div>
            <label for="duration" class="block font-medium mb-1">Duration (days)</label>
            <input
              id="duration" name="duration" type="number" min="1" value="{{ old('duration') }}" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            />
            @error('duration')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Requirements --}}
          <div class="md:col-span-2">
            <label for="msg" class="block font-medium mb-1">Your Requirements</label>
            <textarea
              id="msg" name="msg" rows="4" required
              class="w-full rounded-lg border-b-2 border-gray-400 focus:border-[#295EFF] outline-none py-2 transition"
            >{{ old('msg') }}</textarea>
            @error('msg')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
          </div>

          {{-- Submit --}}
          <div class="md:col-span-2 text-center">
            <button
              type="submit"
              class="bg-blue-700 text-white font-semibold px-10 py-3 rounded-full hover:bg-blue-600 transition"
            >
              Submit Enquiry
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
