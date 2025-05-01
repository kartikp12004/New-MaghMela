<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Magh Mela') }}</title>

  <!-- Vite-compiled CSS (your Tailwind + app CSS) -->
  @vite(['resources/css/app.css'])

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Your custom Mediumish CSS -->
  <link href="{{ asset('frontend/css/mediumish.css')}}" rel="stylesheet">
</head>
<body class="font-sans antialiased">

  {{-- NAV (your old frontend nav) --}}
  @include('frontend.components.home.nav')

  
<!-- Page Content -->
<main class=""> {{-- push content below the fixed nav --}}
  @yield('content')
</main>


  {{-- FOOTER (your old frontend footer) --}}
  @include('frontend.components.home.footer')

  {{-- Vite-compiled JS (your Alpine/Vue/whatever) --}}
  @vite(['resources/js/app.js'])

  <!-- jQuery & Bootstrap (for your old nav collapse, etc.) -->
  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
    integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
    crossorigin="anonymous"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

  <!-- Or, if you prefer Bootstrap 5 bundle with Popper instead of the above two: -->
  <!--
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-…"
    crossorigin="anonymous"></script>
  -->

  <!-- Crisp live-chat -->
  <script type="text/javascript">
    window.$crisp=[];window.CRISP_WEBSITE_ID="deef6aa1-7748-4ada-8b43-1118bb52d110";
    (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";
    s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
  </script>
</body>
</html>
