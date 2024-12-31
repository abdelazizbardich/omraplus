<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<head>

    <title>{{ __(config('app.name')) }} - @yield('title')</title>

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

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body class="font-sans antialiased"
    style="background-image: url('{{ Vite::asset('resources/images/Kaaba.webp') }}'); background-blend-mode: overlay; background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="min-h-screen flex items-center justify-center flex-col">
        <div class="">
            <img src="{{ Vite::asset('resources/images/logo.webp') }}"
                alt="{{ __(config('app.name')) }} {{__('logo')}}" />
        </div>
        <div class="text-center mt-4 w-6/12">
            <hr class="border-b-2 border-white w-20 mx-auto mb-5" />
            <h1 class="text-4xl font-bold text-white">@yield('code')</h1>
            <p class="mt-2 text-lg text-white">@yield('title')!</p>
            <p class="mt-2 text-lg text-white block w-6/12">@yield('message')</p>
        </div>
    </div>
</body>

</html>