@extends('layout.app')

@section('title', $post->seo_title ?? $post->title)
@section('description', $post->seo_description ?? '')

@section('content')
<section class="py-5"></section>
<section class="py-5 bg-white">
<div class="container mx-auto  ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>   
            @if($post->featured_image)
                <img src="{{ asset('blog/storage/' . $post->featured_image) }}" 
                     class="card-img-top" 
                     alt="{{ $post->title }}">
            @endif
            
            <div class="py-4 ">
                {!! $post->content !!}
            </div>
        </div>
    </div>
    
    
                    

</div>
</section>
@endsection
