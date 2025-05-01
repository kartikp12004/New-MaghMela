<!-- @extends('frontend.layout.app') -->
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
  <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

  @if($post->image)
    <img src="{{ asset('storage/'.$post->image) }}"
         class="w-full rounded mb-6" alt="">
  @endif

  <div class="prose">
    {!! nl2br(e($post->content)) !!}
  </div>
</div>
@endsection
