<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<head>

    <title>{{ __(config('app.name')) }} - {{ __('Home') }}</title>

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
</head>

<body class="font-sans antialiased bg-white text-black-900">
    <div class="drawer drawer-start bg-blue-950 text-white z-50">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-side">
            <span class="drawer-overlay"></span>
            <div class="flex items-center flex-col w-full h-full bg-blue-950 justify-center relative gap-3">
                <label for="my-drawer-4" aria-label="close sidebar" class="absolute start-3 top-3 p-4 aspect-square text-2xl"><em class="fa fa-close"></em></label>
                <a href="{{ route('home') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300"><em class="fa fa-home text-3xl" title="{{__('Home')}}"></em></a>
                <a href="{{ route('home') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300">{{__('Omra packs')}}</a>
                <a href="{{ route('home') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300">{{__('Ramadan omra')}}</a>
                <a href="{{ route('home') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300">{{__('Personalizd omra')}}</a>
                <a href="{{ route('home') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300">{{__('Hadj 2025')}}</a>
                <a href="{{ route('home') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300">{{__('Request e-visa')}}</a>
                <a href="{{ route('contact-us') }}" class="px-3 py-2 font-semibold text-xl border-b border-blue-200 block w-10/12 mx-auto hover:ps-6 duration-300">{{__('Contact us')}}</a>
                <img src="{{ Vite::asset('resources/images/logo.webp') }}" class="w-6/12 mx-auto absolute bottom-3" alt="logo">
            </div>
        </div>
    </div>
    <div class="navbar bg-blue-950">
        <div class="flex-1">
            <img class="w-6/12" src="{{ Vite::asset('resources/images/logo.webp') }}"
                alt="{{ __(config('app.name')) }} {{__('logo')}}" />
        </div>
        <div class="flex-none">
            <label for="my-drawer-4" class="btn btn-square btn-ghost text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block h-8 w-8 stroke-current ">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>
        </div>
    </div>
    @yield('content')
</body>

</html>