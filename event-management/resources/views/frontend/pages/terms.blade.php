{{-- resources/views/frontend/pages/terms.blade.php --}}
<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')


@section('content')
<div class="max-w-4xl mx-auto py-12 px-6">
  <h1 class="text-4xl font-extrabold text-indigo-700 mb-6 border-b-4 border-indigo-300 pb-2">
    Terms &amp; Conditions
  </h1>

  <p class="text-gray-700 mb-8">
    Welcome to <span class="font-semibold text-indigo-600">prayagrajmaghmela.com</span>. Please read these terms carefully before using our services.
  </p>

  <div class="space-y-6">
    @foreach([
      ['title'=>'Acceptance of Terms','body'=>'
        By accessing or using our website, you agree to comply with and be bound by these terms and conditions. If you do not agree, please refrain from using our services.
      '],
      ['title'=>'Booking &amp; Payment','body'=>'
        • All bookings are subject to availability.<br>
        • Full payment is required to confirm your booking.<br>
        • Any additional charges (taxes, fees) are shown at checkout.
      '],
      ['title'=>'Cancellation &amp; Refunds','body'=>'
        Refunds follow our <a href="'.url('/refund').'" class="text-indigo-600 underline">Refund Policy</a>.<br>
        – Cancellations ≥ 15 days ahead get partial refunds.<br>
        – Non-refundable fees (processing, taxes) excluded.<br>
        – Refunds in 7–10 business days after approval.
      '],
      ['title'=>'User Responsibilities','body'=>'
        – Provide accurate, up-to-date info.<br>
        – Respect local culture during your Magh Mela tour.<br>
        – Use our services lawfully only.
      '],
      ['title'=>'Limitation of Liability','body'=>'
        We are not liable for:<br>
        – Delays/cancellations (weather, restrictions).<br>
        – Loss/damage to personal items.<br>
        – Failure of third-party services.
      '],
      ['title'=>'Intellectual Property','body'=>'
        All content &amp; logos © prayagrajmaghmela.com. Unauthorized use is prohibited.
      '],
      ['title'=>'Dispute Resolution','body'=>'
        Governed by Indian law &amp; resolved via arbitration in Prayagraj.
      '],
      ['title'=>'Changes to Terms','body'=>'
        We may update these terms anytime. Effective date shown at top.
      '],
      ['title'=>'Contact Us','body'=>'
        Email: <a href="mailto:kumbhexperienceindia@gmail.com" class="text-indigo-600">kumbhexperienceindia@gmail.com</a><br>
        Phone: <span class="font-medium">+91 89329 51318</span>
      '],
    ] as $section)
      <div class="bg-indigo-50 p-5 rounded-lg shadow">
        <h2 class="text-2xl font-semibold text-indigo-700 mb-2">{{ $section['title'] }}</h2>
        <p class="text-gray-800 leading-relaxed">{!! trim($section['body']) !!}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
