{{-- resources/views/frontend/pages/privacy.blade.php --}}
<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')


@section('content')
<div class="max-w-4xl mx-auto py-12 px-6">
  <h1 class="text-4xl font-extrabold text-green-700 mb-6 border-b-4 border-green-300 pb-2">
    Privacy Policy
  </h1>

  <p class="text-gray-700 mb-8">
    How <span class="font-semibold text-green-600">prayagrajmaghmela.com</span> collects, uses, and protects your data.
  </p>

  @foreach([
    ['title'=>'Information We Collect','items'=>[
       'Personal Info: name, email, phone when you inquire.',
       'Usage Data: pages visited, time spent.',
       'Cookies: to improve UX &amp; analytics.',
    ]],
    ['title'=>'How We Use Your Information','items'=>[
       'Respond to inquiries &amp; support.',
       'Optimize website &amp; user experience.',
       'Send updates, newsletters, promotions.',
       'Comply with legal obligations.',
    ]],
    ['title'=>'Sharing Your Information','items'=>[
       'With service providers (hosting, payment).',
       'To comply with law, court orders, govt requests.',
       'Business transfers: mergers, acquisitions.',
    ]],
    ['title'=>'Cookies &amp; Tracking','items'=>[
       'Cookies track activity &amp; improve experience.',
       'You can disable cookies in browser settings.',
    ]],
    ['title'=>'Data Security','items'=>[
       'Industry-standard measures to protect data.',
       'No Internet transmission is 100% secure.',
    ]],
    ['title'=>'Your Rights','items'=>[
       'Access, update, delete your personal data.',
       'Opt-out of promotional emails anytime.',
       'Manage cookies via your browser.',
    ]],
    ['title'=>'Changes to Policy','items'=>[
       'We may update this policy. Effective date shown above.',
    ]],
    ['title'=>'Contact Us','items'=>[
       'Email: kumbhexperienceindia@gmail.com',
       'Phone: +91 89329 51318',
    ]],
  ] as $section)
    <div class="bg-green-50 p-5 rounded-lg shadow mb-6">
      <h2 class="text-2xl font-semibold text-green-700 mb-2">{{ $section['title'] }}</h2>
      <ul class="list-disc list-inside text-gray-800 space-y-1">
        @foreach($section['items'] as $item)
          <li>{!! $item !!}</li>
        @endforeach
      </ul>
    </div>
  @endforeach
</div>
@endsection
