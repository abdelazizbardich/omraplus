<div class="w-full h-full bg-black-1100 pt-12 text-light m-0">
    <div class="container opacity-95 m-auto flex justify-between items-center border-b pb-6 border-light-600">
        <div class="w-3/12 border-e border-light-600 p-6 ps-0">
            <a href="{{ route('home') }}"><img loading="lazy" src="{{ Vite::asset('resources/images/logo-w.png') }}" alt="logo" class="w-full"></a>
                
        </div>
        <div class="w-9/12 p-6 pe-0">
            <p class="w-full text-base text-justify leading-relaxed line-clamp-4">{{ __('index.footer.description') }}.</p>
        </div>
    </div>
    <div class="container opacity-95 m-auto flex justify-between items-center border-b py-8 border-light-600">
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{route('about-us')}}" class="text-light">{{__('index.Who are we?')}}</a></li>
                <li><a href="{{route('home')}}" class="text-light">{{__('index.Booking instructions')}}</a></li>
                <li><a href="{{route('home')}}" class="text-light">{{__('index.our services')}}</a></li>
                <li><a href="{{route('contact-us')}}" class="text-light">{{__('index.Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Hajj guide')}}</a></li>
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Umrah guide')}}</a></li>
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Learn about Mecca')}}</a></li>
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Get to know Medina')}}</a></li>
            </ul>
        </div>
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Who are we?')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-light">{{__('index.Booking instructions')}}</a></li>
                <li><a href="{{ route('home') }}" class="text-light">{{__('index.Privacy policy')}}</a></li>
                <li><a href="{{ route('contact-us') }}" class="text-light">{{__('index.Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('policy.show') }}" class="text-light">{{__('index.Privacy Policy')}}</a></li>
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Payment Policy')}}</a></li>
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Terms and Conditions')}}</a></li>
                <li><a href="{{ route('about-us') }}" class="text-light">{{__('index.Umrati partner program')}}</a></li>
            </ul>
        </div>
    </div>
    <div class="container opacity-95 m-auto flex justify-between items-center py-6">
        <div class="w-auto">
            <span class="text-base block">{{ __('index.All Rights Reserved') }} © {{ date('Y') }}</span>
        </div>
        <div class="w-auto flex flex-row justify-center items-center gap-4">
            <div class="w-auto">
                <img loading="lazy" src="{{ Vite::asset('resources/images/logo-w.png') }}" class="h-8" alt="logo">
            </div>
            <div class="w-auto">
                <img loading="lazy" src="{{ Vite::asset('resources/images/payment method.png') }}" class="h-8" alt="logo">
            </div>
        </div>
    </div>
</div>