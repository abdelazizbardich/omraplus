<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{getLanguageDirection()}}">

<head>
    <title>{{ __(config('app.name')) }} - {{__('Dashboard')}} - {{ __('Home') }}</title>

    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ __('main description') }}">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <meta name="author" content="{{ __(config('app.name')) }}">

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="{{ __(config('app.name')) }} - {{ __('Home') }}">
    <meta property="og:description" content="{{ __('main description') }}">
    <meta property="og:image" content="{{ Vite::asset('resources/images/logo.webp') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __(config('app.name')) }} - {{ __('Home') }}">
    <meta name="twitter:description" content="{{ __('main description') }}">
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
            "name": {{ __(config('app.name')) }} - {{ __('Home') }},
            "description": {{ __('main description') }},
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
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
</body>

</html>