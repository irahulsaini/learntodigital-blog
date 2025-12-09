<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <meta name="description" content="@yield('description')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="article">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto">
            <a href="{{ url('/') }}" class="font-bold text-xl">Home</a>
            <a href="{{ route('blog.index') }}" class="ml-4">Blog</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
