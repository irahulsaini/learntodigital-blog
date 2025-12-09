@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title)
@section('description', $post->seo_description ?? '')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
    <p class="text-gray-500 text-sm mb-6">{{ $post->published_at->format('M d, Y') }}</p>

    @if($post->featured_image)
        <img src="{{ asset('uploads/'.$post->featured_image) }}" alt="{{ $post->title }}" class="mb-6">
    @endif

    <div class="prose max-w-none">
        {!! $post->content !!}
    </div>
</div>
@endsection
