<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4">
  <h1 class="text-3xl font-bold mb-6">All Blog Posts</h1>

  <a href="{{ url('/posts/create') }}"
     class="inline-block mb-6 bg-[#295EFF] text-white px-4 py-2 rounded">
    + New Post
  </a>

  <div class="space-y-6">
    <!-- @foreach($posts as $post)
      <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
        <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
        <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 150) }}</p>
        <a href="{{ url('/posts/'.$post->id) }}"
           class="text-[#295EFF] mt-2 inline-block">Read more →</a>
      </div>
    @endforeach -->

    @foreach($posts as $post)
  <div class="p-6 bg-white rounded shadow mb-4">
    <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
    <p class="mt-2 text-gray-600">{{ Str::limit($post->content, 150) }}</p>
    <div class="mt-4 flex items-center space-x-4">
      <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600">
        Read more →
      </a>

      @auth
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Sure to delete?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-600 hover:underline">
            Delete
          </button>
        </form>
      @endauth


      
    </div>
  </div>
@endforeach

@if(session('success'))
  <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
    {{ session('success') }}
  </div>
@endif

  </div>
</div>
@endsection
