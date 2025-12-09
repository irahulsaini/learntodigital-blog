@extends('layout.app')

@section('title', $post->seo_title ?? $post->title)
@section('description', $post->seo_description ?? '')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
    

    @if($post->featured_image)
        <img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ $post->title }}" class="mb-6">
    @endif

    <div class="prose max-w-none">
        {!! $post->content !!}
    </div>
</div>
@endsection
