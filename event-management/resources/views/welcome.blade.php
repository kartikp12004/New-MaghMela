{{-- resources/views/welcome.blade.php --}}
<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')


@section('content')
  <div class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="text-center p-8">
      <h1 class="text-5xl font-bold text-[#295EFF] mb-4">Welcome to Your Site</h1>
      <p class="text-lg text-gray-700 mb-6">
        This is the home page. Use the links above to log in or register.
      </p>
      @auth
        <a href="{{ url('/posts') }}" class="bg-[#295EFF] text-white px-6 py-3 rounded-lg">Go to Blog</a>
      @else
        <a href="{{ route('login') }}" class="bg-[#295EFF] text-white px-6 py-3 rounded-lg mr-2">Login</a>
        <a href="{{ route('register') }}" class="bg-white border border-[#295EFF] text-[#295EFF] px-6 py-3 rounded-lg">Register</a>
      @endauth
    </div>
  </div>
@endsection
