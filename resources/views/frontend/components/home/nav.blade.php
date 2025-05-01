{{-- resources/views/frontend/components/home/nav.blade.php --}}

<nav
  id="mainNav"
  class="fixed top-0 inset-x-0 z-50 bg-transparent text-white transition-colors duration-300"
>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo / Site Name -->
      <div class="flex-shrink-0">
        <a href="{{ url('/') }}" class="text-2xl font-bold text-current">
          prayagrajmaghmela
        </a>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex md:items-center md:space-x-6">
        <a href="{{ route('posts.index') }}" class="text-current hover:text-blue-500">
          Blog
        </a>
        <a href="{{ route('enquiry.show') }}" class="text-current hover:text-blue-500">
          Enquiry
        </a>

        @guest
          <a href="{{ route('login') }}" class="text-current hover:text-blue-500">
            Login
          </a>
          <a href="{{ route('register') }}" class="text-current hover:text-blue-500">
            Register
          </a>
        @endguest

        @auth
          <a href="{{ route('posts.create') }}" class="text-current hover:text-blue-500">
            New Post
          </a>
          <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-current hover:text-red-500">
              Logout
            </button>
          </form>
          <a href="{{ route('firm-enquiries.index') }}" class="text-current hover:text-blue-500">
            All Enquiries
          </a>
        @endauth
      </div>

      <!-- Mobile Hamburger -->
      <div class="md:hidden">
        <button id="nav-toggle" class="text-current hover:text-blue-500 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="nav-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="nav-menu" class="hidden md:hidden bg-white text-gray-800 shadow-lg">
    <div class="px-2 pt-2 pb-4 space-y-1">
      <a href="{{ route('posts.index') }}" class="block px-4 py-2 hover:bg-gray-100">
        Blog
      </a>
      <a href="{{ route('enquiry.show') }}" class="block px-4 py-2 hover:bg-gray-100">
        Enquiry
      </a>

      @guest
        <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-100">
          Login
        </a>
        <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-100">
          Register
        </a>
      @endguest

      @auth
        <a href="{{ route('posts.create') }}" class="block px-4 py-2 hover:bg-gray-100">
          New Post
        </a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">
            Logout
          </button>
        </form>
        <a href="{{ route('firm-enquiries.index') }}" class="block px-4 py-2 hover:bg-gray-100">
          All Enquiries
        </a>
      @endauth
    </div>
  </div>
</nav>

{{-- Navbar Toggle + Scroll Background Script --}}
<script>
  // Mobile menu toggle
  document.getElementById('nav-toggle').addEventListener('click', () => {
    document.getElementById('nav-menu').classList.toggle('hidden');
  });

  // Change navbar background & text color on scroll
  window.addEventListener('scroll', () => {
    const nav = document.getElementById('mainNav');
    if (window.scrollY > 100) {
      nav.classList.replace('bg-transparent', 'bg-white');
      nav.classList.replace('text-white', 'text-gray-800');
      nav.classList.add('shadow-lg');
    } else {
      nav.classList.replace('bg-white', 'bg-transparent');
      nav.classList.replace('text-gray-800', 'text-white');
      nav.classList.remove('shadow-lg');
    }
  });
</script>
