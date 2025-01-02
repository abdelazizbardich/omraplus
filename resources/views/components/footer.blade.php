<div class="w-full h-full bg-black-950 pt-12 text-white m-0">
    <div class="container opacity-95 m-auto flex justify-between items-center border-b pb-6 border-white">
        <div class="w-3/12 border-e border-white p-6 ps-0">
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/logo-w.png') }}" alt="logo" class="w-full"></a>
                
        </div>
        <div class="w-9/12 p-6 pe-0">
            <p class="w-full text-base text-justify leading-relaxed line-clamp-4">{{ __('Lorem ipsum') }} {{ __('Lorem ipsum') }} {{ __('Lorem ipsum') }}.</p>
        </div>
    </div>
    <div class="container opacity-95 m-auto flex justify-between items-center border-b py-8 border-white">
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('about-us') }}" class="text-white">{{__('Who are we?')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Booking instructions')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Privacy policy')}}</a></li>
                <li><a href="{{ route('contact-us') }}" class="text-white">{{__('Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('about-us') }}" class="text-white">{{__('Who are we?')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Booking instructions')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Privacy policy')}}</a></li>
                <li><a href="{{ route('contact-us') }}" class="text-white">{{__('Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('about-us') }}" class="text-white">{{__('Who are we?')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Booking instructions')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Privacy policy')}}</a></li>
                <li><a href="{{ route('contact-us') }}" class="text-white">{{__('Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('about-us') }}" class="text-white">{{__('Who are we?')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Booking instructions')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-white">{{__('Privacy policy')}}</a></li>
                <li><a href="{{ route('contact-us') }}" class="text-white">{{__('Contact us')}}</a></li>
            </ul>
        </div>
    </div>
    <div class="container opacity-95 m-auto flex justify-between items-center py-6">
        <div class="w-auto">
            <span class="text-base block">{{ __('All Rights Reserved') }} © {{ date('Y') }}</span>
        </div>
        <div class="w-auto flex flex-row justify-center items-center gap-4">
            <div class="w-auto">
                <img src="{{ Vite::asset('resources/images/logo-w.png') }}" class="h-8" alt="logo">
            </div>
            <div class="w-auto">
                <img src="{{ Vite::asset('resources/images/payment method.png') }}" class="h-8" alt="logo">
            </div>
        </div>
    </div>
</div>