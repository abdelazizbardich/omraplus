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
                <x-desktop.atoms.language-switcher></x-desktop.atoms.language-switcher>
                <x-desktop.atoms.theme-switcher></x-desktop.atoms.theme-switcher>
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
                <a href="{{ route('home') }}" class="relative px-4 border-solid border-e h-24 flex flex-col items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Ramadan omra') header-nav-btn-active @endif">
                <svg class="absolute top-4 start-auto end-auto w-4 h-4 aspect-square mb-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 12C2 6.47715 6.47715 2 12 2C12.4627 2 12.5392 2.69347 12.1432 2.93276C10.2594 4.07105 9 6.13845 9 8.5C9 12.0899 11.9101 15 15.5 15C17.8615 15 19.9289 13.7406 21.0672 11.8568C21.3065 11.4608 22 11.5373 22 12C22 13.1377 21.81 14.231 21.46 15.25H22C22.4142 15.25 22.75 15.5858 22.75 16C22.75 16.4142 22.4142 16.75 22 16.75H2C1.58579 16.75 1.25 16.4142 1.25 16C1.25 15.5858 1.58579 15.25 2 15.25H2.53998C2.18999 14.231 2 13.1377 2 12Z" fill="#ffba00"></path> <path d="M5 18.25C4.58579 18.25 4.25 18.5858 4.25 19C4.25 19.4142 4.58579 19.75 5 19.75H19C19.4142 19.75 19.75 19.4142 19.75 19C19.75 18.5858 19.4142 18.25 19 18.25H5Z" fill="#ffba00"></path> <path d="M8 21.25C7.58579 21.25 7.25 21.5858 7.25 22C7.25 22.4142 7.58579 22.75 8 22.75H16C16.4142 22.75 16.75 22.4142 16.75 22C16.75 21.5858 16.4142 21.25 16 21.25H8Z" fill="#ffba00"></path> <path d="M19.9001 2.30719C19.7392 1.8976 19.1616 1.8976 19.0007 2.30719L18.5703 3.40247C18.5212 3.52752 18.4226 3.62651 18.298 3.67583L17.2067 4.1078C16.7986 4.26934 16.7986 4.849 17.2067 5.01054L18.298 5.44252C18.4226 5.49184 18.5212 5.59082 18.5703 5.71587L19.0007 6.81115C19.1616 7.22074 19.7392 7.22074 19.9001 6.81116L20.3305 5.71587C20.3796 5.59082 20.4782 5.49184 20.6028 5.44252L21.6941 5.01054C22.1022 4.849 22.1022 4.26934 21.6941 4.1078L20.6028 3.67583C20.4782 3.62651 20.3796 3.52752 20.3305 3.40247L19.9001 2.30719Z" fill="#ffba00"></path> <path d="M16.0328 8.12967C15.8718 7.72009 15.2943 7.72009 15.1333 8.12967L14.9764 8.52902C14.9273 8.65407 14.8287 8.75305 14.7041 8.80237L14.3062 8.95987C13.8981 9.12141 13.8981 9.70107 14.3062 9.86261L14.7041 10.0201C14.8287 10.0694 14.9273 10.1684 14.9764 10.2935L15.1333 10.6928C15.2943 11.1024 15.8718 11.1024 16.0328 10.6928L16.1897 10.2935C16.2388 10.1684 16.3374 10.0694 16.462 10.0201L16.8599 9.86261C17.268 9.70107 17.268 9.12141 16.8599 8.95987L16.462 8.80237C16.3374 8.75305 16.2388 8.65407 16.1897 8.52902L16.0328 8.12967Z" fill="#ffba00"></path> </g></svg>
                {{__('Ramadan omra')}}
            </a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Personalizd omra') header-nav-btn-active @endif">{{__('Personalizd omra')}}</a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Hadj 2025') header-nav-btn-active @endif">{{__('Hadj 2025')}}</a>
                <a href="{{ route('home') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Request e-visa') header-nav-btn-active @endif">{{__('Request e-visa')}}</a>
                <a href="{{ route('contact-us') }}" class="px-4 border-solid border-e h-24 flex items-center justify-center border-blue-1000 text-white header-nav-btn @if($active === 'Contact us') header-nav-btn-active @endif">{{__('Contact us')}}</a>
            </div>
        </div>
    </div>
</header>