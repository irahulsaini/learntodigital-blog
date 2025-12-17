

@extends('layout.app')

@section('title', 'Learn to Digital Blog')
@section('description', 'Learn to Digital Blog')
@section('canonical', config('app.url'))



@section('content')
<section class="py-5 "></section>
<section class="bg-white py-5">
<div class="container  ">
    <h1 class="mb-4 mt-5 text-dark">Blog</h1>

    <div class="row g-4">
        @foreach($posts as $post)
            <div class="col-md-4">
                
                <div class="card h-100">
                    @if($post->featured_image)
                    <a href="{{ route('blog.show', $post->slug) }}" class="d-block">
                        <img src="{{ asset('blog/storage/' . $post->featured_image) }}" 
                             class="card-img-top" 
                             alt="{{ $post->title }}">
                    </a>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="{{ route('blog.show', $post->slug) }}" class=" text-warning">
                                {{ $post->title }}
                            </a>
                        </h5>
                        <p class="card-text text-muted small">{{ $post->excerpt }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="mt-auto btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>
</div>
</section>
@endsection