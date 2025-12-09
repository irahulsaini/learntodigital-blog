


@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Blog</h1>

    @foreach($posts as $post)
        <div class="mb-8 border-b pb-4">
            <h2 class="text-xl font-semibold">
                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
            </h2>
            <p class="text-gray-500 text-sm">{{ $post->published_at->format('M d, Y') }}</p>
            <p class="mt-2">{{ $post->excerpt }}</p>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection
