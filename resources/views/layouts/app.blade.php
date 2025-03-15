<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{getLanguageDirection()}}">

<head>
    <title>{{ __(config('app.name')) }} - {{__('index.Dashboard')}} - {{ __('index.Home') }}</title>

    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var lang = "{{ str_replace('_', '-', app()->getLocale()) }}";
    </script>
    <meta name="description" content="{{ __('index.main description') }}">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <meta name="author" content="{{ __(config('app.name')) }}">

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="{{ __(config('app.name')) }} - {{ __('index.Home') }}">
    <meta property="og:description" content="{{ __('index.main description') }}">
    <meta property="og:image" content="{{ Vite::asset('resources/images/logo.webp') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __(config('app.name')) }} - {{ __('index.Home') }}">
    <meta name="twitter:description" content="{{ __('index.main description') }}">
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/logo.webp') }}">
    <meta name="twitter:site" content="@agenceomramarrakech">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ config('app.url') }}">

    <!-- Schema.org for SEO -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": {{ __(config('app.name')) }} - {{ __('index.Home') }},
            "description": {{ __('index.main description') }},
            "url": "{{ config('app.url') }}"
        }
    </script>

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    <!-- Performance -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- api url meta -->
    <meta name="api-url" content="{{ config('app.url') }}/api">
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ar-AR.min.js"></script>
    <!-- Styles -->
    @vite('resources/js/app.js')

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-gray-100 dashboard">
    <div class="flex h-screen">
        <x-dashboard.side-nav></x-dashboard.side-nav>
        <div class="w-full h-screen overflow-y-auto">
            <x-dashboard.header></x-dashboard.header>
            <!-- Main Content -->
            <div class="px-6">
                <div class="mb-3">
                    <x-breadcrumbs :links="[$name]" :dark="true"></x-breadcrumbs>
                </div>
                @if (isset($errors) && $errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
        <script>
            function showSlug(input, target) {
                const value = document.querySelector(input).value;
                const slug = value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
                document.querySelector(target).value = slug;
            }
        </script>
</body>

</html>