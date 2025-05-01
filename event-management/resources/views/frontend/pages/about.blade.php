{{-- resources/views/frontend/pages/about.blade.php --}}

@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-gray-50 py-16">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Page Heading --}}
    <h1 class="text-4xl sm:text-5xl font-extrabold text-center text-blue-800 mb-6">
      About Us
    </h1>
    <p class="text-lg text-gray-600 text-center mb-12">
      Welcome to <span class="font-semibold text-blue-700">prayagrajmaghmela.com</span>, your trusted partner for exploring the spiritual and cultural essence of the Prayagraj Magh Mela 2026.
    </p>

    {{-- Sections Container --}}
    <div class="space-y-12">
      {{-- Who We Are --}}
      <section class="space-y-4">
        <h2 class="text-2xl font-semibold text-blue-700">Who We Are</h2>
        <p class="text-gray-700 leading-relaxed">
          We are a passionate team of locals from Prayagraj who understand the city's heritage, traditions, and spiritual significance like no one else. Born and raised in this holy land, we take pride in offering authentic experiences that let you truly connect with the city and its cultural treasures.
        </p>
      </section>

      {{-- Our Mission --}}
      <section class="space-y-4">
        <h2 class="text-2xl font-semibold text-blue-700">Our Mission</h2>
        <p class="text-gray-700 leading-relaxed">
          Our mission is to make your journey to the Magh Mela seamless, memorable, and deeply spiritual. From helping you experience the pious <b>Sangam Snan</b> to exploring the bustling ghats, delicious street foods, and hidden gems of Prayagraj, we ensure every aspect of your trip is special.
        </p>
      </section>

      {{-- Why Choose Us --}}
      <section class="space-y-4">
        <h2 class="text-2xl font-semibold text-blue-700">Why Choose Us?</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li><b>Local Expertise:</b> No one knows Prayagraj like we do—let us guide you from famous spots to hidden treasures.</li>
          <li><b>Authentic Experiences:</b> Traditional street foods, unexplored cultural sites, and personalized tours await.</li>
          <li><b>Customer-Centric:</b> Your satisfaction is our priority; we tailor every detail for a truly memorable journey.</li>
          <li><b>Expert Guidance:</b> Safety, comfort, and insights into local rituals, history, and traditions.</li>
        </ul>
      </section>

      {{-- What We Offer --}}
      <section class="space-y-4">
        <h2 class="text-2xl font-semibold text-blue-700">What We Offer</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>Customized tour packages for the Magh Mela 2026.</li>
          <li>Guided visits to historical and spiritual sites in and around Prayagraj.</li>
          <li>Comfortable accommodations and reliable transportation.</li>
          <li>Delicious local food experiences and cultural immersion.</li>
        </ul>
      </section>

      {{-- Our Values --}}
      <section class="space-y-4">
        <h2 class="text-2xl font-semibold text-blue-700">Our Values</h2>
        <p class="text-gray-700 leading-relaxed">
          Driven by authenticity, integrity, and customer satisfaction, we craft travel experiences that leave a lasting spiritual and cultural impact on our visitors.
        </p>
      </section>

      {{-- Contact Us --}}
      <section class="space-y-4">
        <h2 class="text-2xl font-semibold text-blue-700">Get in Touch</h2>
        <p class="text-gray-700 leading-relaxed">
          Have questions or need assistance? Contact us today to explore our packages and make your Prayagraj Magh Mela 2026 trip truly unforgettable!
        </p>
        <ul class="list-none text-gray-700 space-y-1">
          <li><b>Email:</b> kumbhexperienceindia@gmail.com</li>
          <li><b>Phone:</b> +91 89329 51318</li>
        </ul>
      </section>
    </div>
  </div>
</div>
@endsection
