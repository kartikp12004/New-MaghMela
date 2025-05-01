@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto my-12 p-8 bg-blue-100  rounded-2xl shadow-lg">
  {{-- परिचय --}}
  <div class="mb-8 text-center border-gray-600">
    <h1 class="text-3xl font-extrabold text-gray-800 mb-2">
      Partner with PrayagrajMaghMela
    </h1>
    <p class="text-gray-600">
      हम <strong>PrayagrajMaghMela.com</strong> पर स्थानीय विशेषज्ञों की एक टीम हैं, जो 
      आपकी संस्थागत ज़रूरतों के अनुसार विशेष पूजा, आयोजन और सांस्कृतिक अनुभव प्रदान करते हैं। 
      हमारी प्रतिबद्धता आपके साथ मिलकर बढ़ने की है—चाहे आप तीर्थयात्रा पैकेज में रूचि रखते हों 
      या बड़े आयोजन की मेजबानी करना चाहते हों, हम आपके विश्वास के साथ काम करने के लिए तत्पर हैं।
    </p>
  </div>

  {{-- फॉर्म बॉक्स --}}
  <div class="bg-gray-50 p-6 rounded-xl border border-gray-600">
    @if(session('success'))
      <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
        {{ session('success') }}
      </div>
    @endif

    <h2 class="text-2xl text-center font-semibold text-gray-800 mb-6">Firm Enquiry Form</h2>

    <form action="{{ route('firm-enquiry.store') }}" method="POST" class="space-y-6">
      @csrf

      <div>
        <label class="block text-gray-700 font-medium mb-1">
          Firm Name <span class="text-red-600">*</span>
        </label>
        <input
          type="text"
          name="firm_name"
          value="{{ old('firm_name') }}"
          required
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"
        >
        @error('firm_name')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">
          Website (optional)
        </label>
        <input
          type="url"
          name="website"
          value="{{ old('website') }}"
          placeholder="https://example.com"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"
        >
        @error('website')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">
          Address <span class="text-red-600">*</span>
        </label>
        <textarea
          name="address"
          rows="2"
          required
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300 resize-none"
        >{{ old('address') }}</textarea>
        @error('address')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">
          Message <span class="text-red-600">*</span>
        </label>
        <textarea
          name="message"
          rows="4"
          required
          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300 resize-none"
        >{{ old('message') }}</textarea>
        @error('message')
          <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="text-center">
        <button
          type="submit"
          class="bg-blue-600 text-white font-semibold px-8 py-2 rounded-lg hover:bg-blue-700 transition"
        >
          Submit Enquiry
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
