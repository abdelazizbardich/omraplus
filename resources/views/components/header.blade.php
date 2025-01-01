<header>
    <div class="w-12/12 h-14 bg-yellow-500" id="header-top-bar">
        <div class="container h-full mx-auto flex items-center justify-between">
            <div class="flex items *:center">
                <span class="text-sm">{{ __('header top bar title') }}</span>
            </div>
            <div class="flex items-center">
                <a href="{{ route('about-us') }}" class="me-4 text-sm">{{__('how we are ?')}}</a>
                <a href="{{ route('home') }}" class="me-4 text-sm">{{__('Booking instructions')}}</a>
                <a href="{{ route('home') }}" class="me-4 text-sm">{{__('Privacy policy')}}</a>
                <a href="{{ route('contact-us') }}" class="me-4 text-sm">{{__('Contact us')}}</a>
                <x-atoms.language-switcher></x-atoms.language-switcher>
                <x-atoms.theme-switcher></x-atoms.theme-switcher>
            </div>
        </div>
    </div>
    <div class="w-12/12 h-24 bg-blue-950" id="header-main-bar">
        <div class="container h-full mx-auto flex items-center justify-between">
            <div class="flex items *:center">
                <a href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="{{ __('Logo') }}" class="h-16">
                </a>
            </div>
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="px-8 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Home') header-nav-btn-active @endif"><em class="fa fa-home text-3xl" title="{{__('Home')}}"></em></a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Omra packs') header-nav-btn-active @endif">{{__('Omra packs')}}</a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Ramadan omra') header-nav-btn-active @endif">{{__('Ramadan omra')}}</a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Personalizd omra') header-nav-btn-active @endif">{{__('Personalizd omra')}}</a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Hadj 2025') header-nav-btn-active @endif">{{__('Hadj 2025')}}</a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Request e-visa') header-nav-btn-active @endif">{{__('Request e-visa')}}</a>
                <a href="{{ route('contact-us') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Contact us') header-nav-btn-active @endif">{{__('Contact us')}}</a>
            </div>
        </div>
    </div>
</header>