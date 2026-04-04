<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ getLanguageDirection() }}">

<head>
    <title>{{ __(config('app.name')) }} - {{ __('index.Partner Program') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        var lang = "{{ str_replace('_', '-', app()->getLocale()) }}";
    </script>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body class="bg-gray-100 min-h-screen font-sans antialiased">

    {{-- Top Navbar --}}
    <nav class="bg-blue-950 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <a href="{{ route('partner.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{ Vite::asset('resources/images/logo-w.png') }}"
                        alt="{{ __(config('app.name')) }}"
                        class="h-8 object-contain">
                    <span class="text-xs font-semibold opacity-75 border border-white/30 rounded px-2 py-0.5">
                        {{ __('index.Partner Program') }}
                    </span>
                </a>

                {{-- Right side --}}
                <div class="flex items-center gap-4">

                    {{-- Language Switcher --}}
                    <x-language-switcher />

                    {{-- User info + logout --}}
                    <div class="flex items-center gap-3">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-semibold leading-tight">{{ auth()->user()->name }}</p>
                            <p class="text-xs opacity-60 leading-tight">{{ auth()->user()->email }}</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-sm btn-outline btn-error text-white border-white/40 hover:bg-red-600 hover:border-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                                </svg>
                                <span class="hidden sm:inline">{{ __('index.Logout') }}</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        @if (isset($errors) && $errors->any())
            <div class="alert alert-error mb-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success mb-6">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
