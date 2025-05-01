{{-- resources/views/frontend/pages/refund.blade.php --}}
<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')


@section('content')
<div class="max-w-4xl mx-auto py-12 px-6">
  <h1 class="text-4xl font-extrabold text-red-700 mb-6 border-b-4 border-red-300 pb-2">
    Refund Policy
  </h1>

  <p class="text-gray-700 mb-8">
    At <span class="font-semibold text-red-600">prayagrajmaghmela.com</span>, your satisfaction is our priority. Please read below.
  </p>

  @foreach([
    ['title'=>'Eligibility for Refunds','items'=>[
       'Cancellations ≥ 15 days before event start date.',
       'Requests via our official channels with proof of booking.',
       'Unforeseen circumstances handled case-by-case.',
    ]],
    ['title'=>'Non-Refundable Items','items'=>[
       'Processing fees &amp; taxes.',
       'Confirmed hotel/transport charges.',
       'Customized packages or special requests.',
    ]],
    ['title'=>'Refund Process','items'=>[
       'Approved refunds processed in 7–10 business days.',
       'Reimbursed to original payment method.',
       'You will receive a confirmation email.',
    ]],
    ['title'=>'Changes/Cancellations by Us','items'=>[
       'You will be notified immediately.',
       'We offer an alternative package or full refund.',
    ]],
    ['title'=>'Contact Us','items'=>[
       'Email: kumbhexperienceindia@gmail.com',
       'Phone: +91 89329 51318',
    ]],
  ] as $section)
    <div class="bg-red-50 p-5 rounded-lg shadow mb-6">
      <h2 class="text-2xl font-semibold text-red-700 mb-2">{{ $section['title'] }}</h2>
      <ul class="list-disc list-inside text-gray-800 space-y-1">
        @foreach($section['items'] as $item)
          <li>{!! $item !!}</li>
        @endforeach
      </ul>
    </div>
  @endforeach
</div>
@endsection
