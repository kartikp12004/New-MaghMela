<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
  <h1 class="text-3xl font-bold mb-6">Write a New Post</h1>

  <form action="{{ url('/posts') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
      <label class="block mb-1">Title</label>
      <input name="title" value="{{ old('title') }}"
             class="w-full border p-2 rounded" />
      @error('title')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
    </div>

    <div>
      <label class="block mb-1">Content</label>
      <textarea name="content" rows="6" class="w-full border p-2 rounded">{{ old('content') }}</textarea>
      @error('content')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
    </div>

    <div>
      <label class="block mb-1">Image (optional)</label>
      <input type="file" name="image" class="block" />
      @error('image')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
    </div>

    <button type="submit"
            class="bg-[#295EFF] text-white px-4 py-2 rounded">
      Publish
    </button>
  </form>
</div>
@endsection
